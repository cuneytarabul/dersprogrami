# dersprogrami

Ders Programı modülünü eklemek için öncelikle,
Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

---------------------------

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/cuneytarabul/dersprogrami.git" } ],

"require": {

....   
"kouosl/DersProgrami": "dev-master"
},

----------------------------

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal 
composer update
php yii migrate--migrationPath=@vendor/kouosl/DersProgrami/migrations

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

----------------------------

'DersProgrami' => [ 'class' => 'kouosl\DersProgrami\Module'
],

----------------------------

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/DersProgrami buradan modüle ulaşabilirsiniz.

Cüneyt Arabul - 141307039
