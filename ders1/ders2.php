<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Sık Kullanılan Hazır Fonksiyonlar</h3>

<?php

echo $metin = "aydın adnan menderes üniversitesi";
$byazi = strtoupper($metin); //Yazıyı büyük harfe dönüştür.
$kyazi = strtolower($byazi); //Yazıyı küçük harfe dönüştür.
$mb_byazi = mb_strtoupper($kyazi); //Yazıyı büyük harfe dönüştür.
$mb_kyazi = mb_strtolower($mb_byazi); //Yazıyı küçük harfe dönüştür.
$ilkharf_buyuk_metin = ucfirst($mb_kyazi); //Gelen metnin ilk harfini büyütür.
$ilkharf_buyuk_kelime = ucwords($mb_kyazi); // Gelen metnin kelimelerinin baş harfini büyütür.

echo "<br>Karakter Sayısı: " .strlen($metin);
echo "<br> Metnin Beliri Bir Karakter Sayısı: " .substr($metin,0,21);


?>

<h4>Uygulama:</h4>
<p>Lorem Metninin ilk 100 karakterini alın devamında bir buton yerleştirerek Adü web sitesine yönlendirin.</p>

<?php
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam enim facere, praesentium, quas tenetur voluptas doloribus consequatur porro ullam, hic eius blanditiis saepe cupiditate. Quos optio earum id harum.";

echo substr($lorem,0,99);

echo '<br><a href="https://www.adu.edu.tr" target="_blank"><button>Devamını Oku...</button></a>';

?>
</body>
</html>