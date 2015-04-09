<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$islem="*";
$sayi1=1;
$sayi2=4;

switch ($islem){
   case "+": $sonuc=$sayi1+$sayi2; break;
   case "-": $sonuc=$sayi1-$sayi2; break;
   case "*": $sonuc=$sayi1*$sayi2; break;
   default: $sonuc=$sayi1/$sayi2;
}

?>