# Week4Assignment

## ARAŞTIRMA (20 puan)
- Test Driven Development ve Behaviour Driven Development arasındaki farkı açıklayınız.

Cevap= Temel fark kapsamdır. TDD bir geliştirme uygulamasıdır , BDD ise bir ekip metodolojisidir . TDD’de geliştiriciler testleri yazarken, BDD’de otomatik özellikler kullanıcılar veya testçiler tarafından oluşturulur (geliştiriciler bunları test edilen koda bağlarlar.)
BDD, bir uygulamanın davranışını son kullanıcının bakış açısından test etmek için tasarlanmıştır, TDD ise daha küçük işlevsellik parçalarını ayrı ayrı test etmeye odaklanır.



- Unit Test nedir? Unit Test nasıl yapılır?

Cevap= Bir yazılımın en küçük test edilebilir bölümlerinin, tek tek ve bağımsız olarak doğru çalışması için incelendiği bir yazılım geliştirme sürecidir. Amaç, yazılım kodunun her biriminin beklendiği gibi çalıştığını doğrulamaktır. Geliştiriciler tarafından bir uygulamanın geliştirilmesi (kodlama aşaması) sırasında yapılır.
Birim testine yardımcı olacak birkaç otomatik araç vardır. PHPUnit bunlardan biridir. PHPUnit, PHP programcısı için bir birim test aracıdır. Birim adı verilen küçük kod bölümlerini alır ve her birini ayrı ayrı test eder.
Unit Test, yazılım süreçlerindeki dört test çeşidinden sadece bir tanesidir.
Unit Tests: Metotların testidir. Teknik olarak en yoğun test türüdür.
Integration Tests: Uygulamadaki modüllerin birbirleriyle nasıl davranış sergilediklerinin kontrol edildiği test türüdür.
End to End Tests: Bir uygulamanın baştan sona kadar nasıl davranış sergileyeceğinin test edilmesidir.
UI Tests: Kullanıcı arayüzünün test edilmesidir.
