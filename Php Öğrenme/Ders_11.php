<?php
//11.Ders
    $url = 'index';
    switch ($url) { // if else aynı'dır genelde if else daha çok kullanılır 
        case 'index': // if gibidir true döndürmek istediğiniz kısma konulur
            echo 'İndex Sayfasındasınız'; //yazdırmak istediğiniz kısım konulur
        break; //olay true döndüyse durdurur
        case 'iletişim':
            echo 'İletişim Sayfasındasınız';
        break;
        case 'hakkımızda';
            echo 'Hakkımızda Sayfasındasınız';
        break;
        default: // Sorgu false dönerse döngüyü durdurur
            echo 'Mallesef böyle bir sayfa bulunamadı';
        break;
    }
?>