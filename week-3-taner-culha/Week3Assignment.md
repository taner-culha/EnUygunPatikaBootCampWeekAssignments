# Week3Assignment

1-Symfony kullanmanın avantajları nedir?
	İş yükümüzü azaltarak bize daha kolay ve daha düzenli kodlar yazmamızı sağlar.
	Proje süresinde tasarruf sağlar.

2-Symfony ile environment (ortam) ayarlaması nasıl yapılır?
	config/packages/dev/        http://localhost:8000
	config/packages/prod/       http://localhost:8000/app.php
	config/packages/test/

3-Yeni bir Symfony projesi oluşturmak için kullanılan composer komutu nedir? Alternatif bir komutla Symfony projesi oluşturabilir miyiz?
	a. composer require --dev symfony/browser-kit
	b. php symfony new symproject        // Symfony'nin en son sabit sürümü ile 
	   php symfony new symproject 3.0.1  // Symfony'nin belirli bir sürümü ile 
	   php symfony new symproject lts    // Symfony'nin en dönem teknik destek veren sürümü ile 
	   php symfony demo                  // Symfony'nin çalışmasını gösteren demo

4-Laravel framework ve Symfony framework arasındaki temel farklardan iki tanesini yazınız.
	a. Symfony, yeniden kullanılabilir PHP bileşenleri ve kitaplıkları içeren bir PHP web uygulama çerçevesidir.
	   Laravel, Symfony tabanlı MVC mimari desenini takip eden ücretsiz, açık kaynaklı bir PHP web çerçevesidir.
	b. Symfony veritabanı erişimi için Doktrini kullanıyor.
	   Laravel veritabanı erişimi için Eloquent kullanıyor.
