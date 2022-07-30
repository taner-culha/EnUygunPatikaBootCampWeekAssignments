# Week6Assignment

## ARAŞTIRMA (10 puan)
Soru 1: Lazy Loading ve Eager Loading arasındaki farkları yazınız.

Cevap: Lazy Loading = Oluşturulan yeni bir entity model için varsayılan olarak tanımlı data yükleme yönetimidir. Bu yöntemde veriler sorguya bağlı olarak çekilir ancak veri setinin içindeki tüm dataları yüklemek yerine verilerin çağrıldıkça otomatik yüklenmesi söz konusudur. Yani bir uygulamada birbirine bağli olarak tanımlanmış componentlerin tamamının bir seferde yüklenmesi yerine istemci tarafından çağırıldığında yüklenmesine olanak veren bir yapıdır. 
      <br> Eager Loading = Eager loading Linq sorgusu çalıştırıldığında verilerin tamamını yükler ve hafızaya alır.

Lazy Loading'in tam tersi yönde çalışır. Kullanacağımız nesneleri, nesnenin ihtiyaç anından çok önce yaratır ve bekletir. Eager loading Linq sorgusu çalıştırıldığında verilerin tamamını yükler ve hafızaya alır.

# Postman

{
	"info": {
		"_postman_id": "9c9872e8-d491-4dff-927b-1aba2dea1f22",
		"name": "Week6",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "22461692"
	},
	"item": [
		{
			"name": "http://127.0.0.1:8000/add",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n    \"ProductName\":\"Ayakkabı\",\r\n    \"ProductDescription\":\"Spor Ayakkabı\",\r\n    \"ProductCount\":1000,\r\n    \"ProductPrice\":1499.99\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "http://127.0.0.1:8000/add",
					"protocol": "http",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"add"
					]
				}
			},
			"response": []
		},
		{
			"name": "http://127.0.0.1:8000/product/all",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://127.0.0.1:8000/product/all",
					"protocol": "http",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"product",
						"all"
					]
				}
			},
			"response": []
		},
		{
			"name": "http://127.0.0.1:8000/product/5",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://127.0.0.1:8000/product/5",
					"protocol": "http",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"product",
						"5"
					]
				}
			},
			"response": []
		},
		{
			"name": "http://127.0.0.1:8000/product/edit/8",
			"request": {
				"method": "PUT",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n    \"ProductName\":\"Camera\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "http://127.0.0.1:8000/product/edit/8",
					"protocol": "http",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"product",
						"edit",
						"8"
					]
				}
			},
			"response": []
		},
		{
			"name": "http://127.0.0.1:8000/product/delete/2",
			"request": {
				"method": "DELETE",
				"header": [],
				"url": {
					"raw": "http://127.0.0.1:8000/product/delete/2",
					"protocol": "http",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"product",
						"delete",
						"2"
					]
				}
			},
			"response": []
		}
	]
}
