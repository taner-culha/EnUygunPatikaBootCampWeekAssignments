<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * @Route("/home")
   */
  public function index(): Response
  {
    $userName = "Kürşat";
    $parkedCars = array(
        array("brand" => "Toyota", "model" => "Corolla", "plate" => "16 ASD 23"),
        array("brand" => "Mercedes", "model" => "200E", "plate" => "16 QWE 24"),
        array("brand" => "Tofaş", "model" => "Doğan", "plate" => "16 ZXC 25"),
    );

    return $this->render('home.html.twig', [
      'user' => $userName,
      'cars' => $parkedCars
    ]);
  }
}
