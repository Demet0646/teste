<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$sayi=$_POST["sayi"];
$islem=$_POST["islem"];
$fakt=1;

echo "sayı=$sayi <br>";
echo "islem=$islem <br>";

switch($islem)
{
	case "karesi":$sonuc=$sayi*$sayi; break;
	case "kupu":$sonuc=$sayi*$sayi*$sayi; break;
	case "karakoku":$sonuc=sgrt($sayi); break;
	default:
	for($i=1; $i<$islem; $i++)
	{
		$fakt=$fakt*$i;
		$sonuc=$fakt;
	}
}
echo "sonuç=$sonuc<br>";





?>