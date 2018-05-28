# dersprogrami

Ders Programı modülünü eklemek için öncelikle,

Komut satırında modülümüzü ekleyeceğimiz yere (@vendor/kouosl/) altına geliyoruz. Ardından "git clone https://github.com/cuneytarabul/dersprogrami.git" komutunu çalıştırarak modülümüzü projemize indiriyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'DersProgrami' => [ 'class' => 'kouosl\DersProgrami\Module'
],

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/cuneytarabul/dersprogrami.git" } ],

"require": {

....   
"kouosl/DersProgrami": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal sudo chmod -R 777 vendor/kouosl/DersProgrami composer update

Son adım olarakda modülümüzde "migrations" klasöründeki .php uzantılı dosyayı kopyalayıyoruz ve portal dizininde "console/migrations/" altına yapıştırıyoruz(klasör yok ise kendimiz oluşturuyoruz). Ardından sanal makinamızda,

php yii migrate

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/DersProgrami buradan modüle ulaşabilirsiniz.

Cüneyt Arabul - 141307039
