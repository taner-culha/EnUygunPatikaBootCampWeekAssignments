# Week5Assignment

## ARAŞTIRMA (20 puan)
Soru 1: PHP PDO nedir? Hangi amaçla kullanılır?

Cevap: PHP Veri Nesneleri (PDO), çeşitli veritabanlarına erişim için oldukça hafif ve tutarlı bir arayüz sunan bir PHP programlama dili eklentisidir. PDO sınıfını kullanarak, PDO için oluşturulmuş veritabanı sürücülerinde/sistemlerinde veri ekleme, seçme, güncelleme vb. işlemlerini yapmaya imkan verir. PDO yapısını öğrenerek desteklediği tüm veritabanı sistemleri üzerinde işlem yapabilirsiniz. Ayrıca PDO bir OOP sınıfı olduğundan kalıtım alınarak genişletilebilir.

Soru 2: DB Index nedir? Avantajları ve dezavantajları nelerdir?

Cevap: İndex sorguları hızlandırmak için kullanılan bir özelliktir. Indeksleme kullanarak tablonun tamamını okumaktansa oluşturacağımız indeks key i aracılığı ile okumak istediğimiz kayıda ulaşabilmemiz daha hızlı bir şekilde mümkün olacaktır. 
<br>Avantajları: Veritabanında veriler çok fazla olduğunda performans açısından düşüklüğe yol açmaktadır. Karmaşık bir yapıda olan verilerde istenilen bilgili bulmak tablo taranır. Bu işlem küçük tablolarda yapmak oldukça basittir. Tablonuzda sürekli olarak yeni veriler geliyorsa tablo taraması yapmak size vakit kaybettireceğinden dolayı index yapısı kullanılarak verilere daha hızlı erişim imkanı sunmaktadır.
<br>Dezavantajları: Veri tabanına her ekleme (insert), güncelleme (update) ve silme (delete) işlemlerinden sonra index yapısı yeniden inşa edilmektedir. Yeniden inşa edileceğinden dikkat etmemiz gereken hususlar
1. Fazla kullanılmayan sütunlar için index oluşturmamalıyız.
2. Gerekmedikçe index oluşturmamalıyız.
Eğer oluşturursak bu sistemimizin performansını düşürecektir.
