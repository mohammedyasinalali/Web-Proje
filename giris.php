<?php

$kullanici_adi = "muhammedelali@gmail.com";
$sifre = "g231210566";

if ($kullanici_adi == $_POST['id'] && $sifre == $_POST['sifre']) {
    echo "Hoşgeldiniz Muhammed elali <br/>";
    echo " 7 saniye içinde hakkimda sayfasına yönelendirileceksiniz";
    header("Refresh: 7; url=giris.html");

} else {
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    header("Refresh: 3; url=giris.html");
}

?>