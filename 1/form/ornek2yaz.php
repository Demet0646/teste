<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

	$sayi=$_POST["sayi"];
	$islem=$_POST['islem'];
	$fakt=1;
	
	echo "Sayı= $sayi <br>";
	echo "İşlem= $islem <br>";
	
	switch($islem)
	{
		case "Kare": $sonuc=$sayi*$sayi; break;
		case "Küp": $sonuc=$sayi*$sayi*$sayi; break;
		case "Karekök": $sonuc=sqrt($sayi); break;
		default: 
				for($i=1;$i<=$sayi;$i++)
				{
					$fakt=$fakt*$i;
					$sonuc=$fakt;
				}
				break;	
	}
	
	echo "Sonuç= $sonuc <br>";
	

?>
