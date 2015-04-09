<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

	$sayi1=$_POST["sayi1"];
	$sayi2=$_POST["sayi2"];
	$islem=$_POST["islem"];
	
//	echo "Sayı 1= $sayi1 <br> Sayı 2= $sayi2 <br> İşlem= $islem <br>";
	
	if($islem=="+")
   		$sonuc=$sayi1+$sayi2;
	elseif($islem=="-")
   		$sonuc=$sayi1-$sayi2;
	elseif($islem=="*")
   		$sonuc=$sayi1*$sayi2;
	else
   		$sonuc=$sayi1/$sayi2;
	
/*
	switch($islem)
	{
		case "+": $sonuc=$sayi1+$sayi2; break;
		case "-": $sonuc=$sayi1-$sayi2; break;
		case "*": $sonuc=$sayi1*$sayi2; break;
		default: $sonuc=$sayi1/$sayi2; break;	
	}
*/

	echo "İşlemin Sonucu:<br>$sayi1 $islem $sayi2 = $sonuc";	
?>

