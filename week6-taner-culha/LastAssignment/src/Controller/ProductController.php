<?php
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ProductController extends AbstractController
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository=$productRepository;
    }

    // Create Product

    #[Route('/add', name: 'create_product')]
    public function createProduct(ValidatorInterface $validator, Request $request): JsonResponse
    {
        $request=$request->toArray();

        $product = new Product();
        $productDate=new \DateTime();

        $product
                ->setProductName($request['ProductName'])
                ->setProductDescription($request['ProductDescription'])
                ->setProductCount($request['ProductCount'])
                ->setProductPrice($request['ProductPrice'])
                ->setProductDate($productDate);
        
        $this->productRepository->add($product, flush:true);

        $errors = $validator->validate($product);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }
        return new JsonResponse('Successs product id:'.$product->getId());
    }

    // Show All Product

    #[Route('/product/all', name: 'product_list')]
    public function showAll(ManagerRegistry $doctrine, SerializerInterface $serializer): JsonResponse
    {
        $product = $doctrine->getRepository(Product::class)->findAll();
             
        $data = $serializer->serialize($product, 'json');
        
        return new JsonResponse($data);
    }   
    
    // Show ID Product

    #[Route('/product/{id}', name: 'product_show')]
    public function show(ManagerRegistry $doctrine, int $id,SerializerInterface $serializer): JsonResponse
    {
        $product = $doctrine->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
             
        $data = $serializer->serialize($product, 'json');
        
        return new JsonResponse('Show product id:'.$data);
    }   

    // Update Product

    #[Route('/product/edit/{id}', name: 'product_edit')]
    public function updateProduct(ManagerRegistry $doctrine, ValidatorInterface $validator, Request $request, int $id): JsonResponse
    {
        $entityManager = $doctrine->getManager();
        $request=$request->toArray();

        $product=$this->productRepository->findOneBy(["id"=>$id]);
        $product->setProductName($request['ProductName']);
        $entityManager->flush();

        $errors = $validator->validate($product);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }
        return new JsonResponse('Successs product id:'.$product->getId());
    }

    // Delete Product

    #[Route('/product/delete/{id}', name: 'product_delete')]
    public function delete(ManagerRegistry $doctrine, product $product): JsonResponse
    {
        $entityManager = $doctrine->getManager();
        $entityManager->remove($product);
        $entityManager->flush();

        return new JsonResponse ("The product has been deleted");
    }
}