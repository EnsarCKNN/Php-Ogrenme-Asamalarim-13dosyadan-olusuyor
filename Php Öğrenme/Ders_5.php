<?php
//5.Ders
        $deger = 5; // = değer atar
        $deger /= 45; // / bölerek değer atar
        $deger *= 55; // * Çarparak değer atar
        $deger -= 15; // - Çıkararak değer atar
        $deger += 15; // + Toplayarak değer atar
        $deger %= 10; // % Kalan değer atar
        echo $deger.'<br>';
        $name = 'Ensar';
        $soy = 'YKN';
        echo '<i>'.$name.'</i>'.' '.'<b>'.$soy.'</b>'.'<br>';
        $isim = 'Eren';
        $isim .= ' Ensar'; // . değerleri Birleştirir
        echo $isim.'<br>';
        $ders = 'Php Dersleri';
        $h = '<h1>';
        $h .= $ders;
        $h .= '</h1>';
        echo $h;
?>