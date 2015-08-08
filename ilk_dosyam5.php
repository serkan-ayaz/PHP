<?php
$sayi1=5;
$sayi2=4;

echo $sayi1 + $sayi2;

echo "<br>";

echo ceil($sayi1/$sayi2);//yukarı yuvarlama
echo "<br>";
echo floor($sayi1/$sayi2); //aşağı yuvarlama
echo "<br>";

echo ++$sayi1;
echo "<br>";

echo $$sayi2; //$$ > bir önceki değişkenin değerini basar, ama burda hata veriyor...
?>