# Düzenlenebilir jquery ağaç yapısı - PHP Kodlu #
Bu yazılım bir ağaç yapısıdır ve sahip olduğu eleman ekleme,
isim değiştirme, sürükle-bırak ve silme işlemlerini sunucuya
ajax istekleri göndererek yapar. Ağaç yapısındaki
elemanlar veritabanında olabileceği gibi dosya sistemi üzerinde dosyalar
ve klasörler de olabilir.Ajax isteklerinin uygun
şekilde işlenebilmesi için sunucunun PHP ve elemanlar veritabanı üzerinde
olacaksa MySQL yazılımlarına sahip olması gerekir.
<br />
Bu yazılım ayrıca <a href='http://jquery.com'>jquery javascript çerçevesini</a>,
simple tree eklentisini kullanır.
<br />


## KURULUM ##
Hangi platformda çalışacağını 'includes/config.php' dosyasında
<pre>TARGET_PLATFORM</pre> makrosuna
<pre>DATABASE_PLATFORM veya FILE_SYSTEM_PLATFORM</pre> makrolarından
birini atayarak ayarlayabilirsiniz. <br /><br />
Örnek:
<pre>define ("TARGET_PLATFORM", DATABASE_PLATFORM);</pre>

**Eğer TARGET\_PLATFORM makrosuna FILE\_SYSTEM\_PLATFORM atandı ise**,
FILE\_ROOT makrosuna kök klasörün adresini giriniz.
Örnek:
<pre>define("FILE_ROOT", "/home/mekya/public_html/test");</pre>
Yukarıda belirtilen klasörün web sunucu kullanıcısının okuma ve yazma
hakkının olduğuna emin olunuz.<br /><br />

**Eğer TARGET\_PLATFORM makrsouna DATABASE\_PLATFORM atandı ise** ,
Veritabanı parametrelerini(kullanıcı adı, şifre vb.) yine 'includes/config.php' dosyası içine yazınız, ayrıca TREE\_TABLE\_PREFIX makrosunu değiştirerek oluşturacağınız tablonun
adının ön ekini değiştirmiş olursunuz. <br />
TREE\_TABLE\_PREFIX makrosunun varsayılan değeri 'tree' dir.
<br />
Tabloyu TREE\_TABLE\_PREFIX makrosuna göre oluşturun, eğer bu değeri
değiştirmedi iseniz aşağıdaki kodu direk kullanabilirsiniz:
```
 CREATE TABLE  `tree_elements` (
 `Id` int(10) unsigned NOT NULL auto_increment,
 `name` varchar(45) NOT NULL,
 `position` int(10) unsigned NOT NULL default '0',
 `ownerEl` int(10) unsigned NOT NULL default '0' COMMENT 'parent',
 `slave` binary(1) NOT NULL default '0',
 PRIMARY KEY  (`Id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
```

## Özellikler ##
### Eleman ekleme ###
<img src='http://lh5.ggpht.com/_ZULEwNxx018/SbPBunOb-gI/AAAAAAAAAFM/mF2AC0Ux8Ww/addElement.png' /><br />
Altına yeni eleman eklemek istenen elemanın üzerinde
tıklayarak "Dosya ekle" veya "Klasör ekle"  işlemleri seçilebilir.	<br />
<img src='http://lh4.ggpht.com/_ZULEwNxx018/SbPBu2dZjWI/AAAAAAAAAFU/YXSrkEc7Rio/addElementText.png' />
<img src='http://lh3.ggpht.com/_ZULEwNxx018/SbPYnp1ZNsI/AAAAAAAAAF8/oBsEiqzUrAA/elementAdded.png' /><br />
Yeni dosya veya klasörünün ismi alan kutusunun içine yazdıktan sonra <b>Enter</b> tuşuna basılırsa sunucuya ajax isteği gönderilir, <b>Esc</b> tuşuna basılırsa işlem iptal edilir.


### Eleman silme ###
<img src='http://lh3.ggpht.com/_ZULEwNxx018/SbPBvCanaFI/AAAAAAAAAFc/CEjJx6LPyAc/deleteElement.png' /><br />
Silmek istenen elemanın üzerinde sağ tıklayarak  "Sil" işlemi
seçilir. Silme işlemi tamamlanınca ilgili eleman ağaç yapısından kaldırılacaktır.
Ayrıca klasör sildiğiniz zaman onun altındaki tüm elemanlarda silinmektedir.


### Elemanın yerini değiştirme ###
<img src='http://lh3.ggpht.com/_ZULEwNxx018/SbPBvZtqk5I/AAAAAAAAAFk/cdynzzHANcY/dragElement.png' />
<img src='http://lh5.ggpht.com/_ZULEwNxx018/SbPBvgJjSwI/AAAAAAAAAFs/zpwLIbZa8Wo/dropElement.png' /><br />
Sürükle-bırak yöntemi ile elemanların yerleri değiştirilebilir. Yerini
değiştirmek istediğiniz eleman tutularak(üzerinde sol tıklayıp ve basılı tutarak) olması
istenen yere bırakılır - farenin sol tuşu serbest bırakılır.


### Eleman ismini değiştirme ###
<img src='http://lh4.ggpht.com/_ZULEwNxx018/SbPBu2dZjWI/AAAAAAAAAFU/YXSrkEc7Rio/addElementText.png' /><br />
İsmi değiştirilmek istenen elemanın üzerinde sağ tıklayarak "Düzenle" işlemi seçilir.
<div><img src='http://lh3.ggpht.com/_ZULEwNxx018/SbPYnp1ZNsI/AAAAAAAAAF8/oBsEiqzUrAA/elementAdded.png' /><br />
Elemanın yeni ismi açılan kutunun içine yazıldıktan sonra <b>Enter</b> tuşuna basılırsa sunucuya ajax isteği gönderilir, <b>Esc</b> tuşuna basılırsa işlem iptal edilir.<br>
<br>
<br>
<br>
<h2>Destek</h2>
Eğer bu yazılım kullanırken veya değiştirirken desteğe ihtiyaç duyarsanız,<br>
elimizden geldiğince yardım etmekten mutluluk duyarız.<br>
<br>
<br>
<h2>Lisans</h2>
Bu yazılım ücretsizdir,<br>
istenildiği gibi değiştirilebilir ve dağıtılabilir.<br>
<br>
<h2>Tekzip</h2>
Bu yazılım hiç bir şeyi garanti etmez, yazılımı kullanırken bütün<br>
sorumluluk kullanana aittir.<br>
Herhangi bir durumda kesinlikle sorumluluk kabul edilmez..<br>
<br>
<h2>Yazarlar</h2>
Ozan Köroğlu - <a href='mailto:koroglu.ozan@gmail.com'>koroglu.ozan@gmail.com</a>  <br />
Ahmet Oğuz Mermerkaya (mekya) - <a href='mailto:ahmetmermerkaya@gmail.com'>ahmetmermerkaya@gmail.com</a>
<br />
<a href='http://www.e-yillik.net/'>www.e-yillik.net</a>