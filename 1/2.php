<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$isim=$_POST["isim"];
$mail=$_POST["mail"];
$islem=$_POST["islem"];
$mesaj=$_POST["mesaj"];
$sonuc=$_POST["sonuc"];
if($sonuc==$islem){
	

echo " isim $isim<br>  mail: $mail<br> girdiğiniz değer: $islem  <br> mesaj:$mesaj";	
	
	}
	else echo "hatalı girdiniz...";




	



?>