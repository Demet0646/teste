<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$sayi1=10;
$sayi2=7;
$sayi3=15;
 
switch (true){
   case ($sayi1>=$sayi2 and $sayi1>=$sayi3): $eb=$sayi1; break;
   case ($sayi2>=$sayi1 and $sayi2>=$sayi3): $eb=$sayi2; break;
   default: $eb=$sayi3;
}
 
echo "En büyük sayı: $eb";

?>