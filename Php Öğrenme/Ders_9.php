<?php
//9.Ders
        $a = 10;
        if ($a == 10) { //İf'e sorgu ve olayı yazılır sorgu parenyezlerin içine yazılır olay ise süslü paranteze yazılır olayda görüldüğü gibi
            echo '$a 10\'a eşit olduğundan true döner';
        }
        elseif ($a == 11 || $a == 12) { //sorgu eğer 1 veya 2'den fazlaysa kullanılır genelde if'le aynı amaçla kullanılır
            echo '$a  eşittir 11\'e veya 12\'ye eşit olduğu için bu yazı çıkmıştır';
        }
        else { //Else'ye sadece olay yazılır sorgu yazılmaz   false ise otamatik olarak else döner.
            echo '$a 10\'a eşit olmadığından dolayı false döner';
        }
?>