<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(!$_POST){
	
	echo'
<form action="" method="post">
<table width="300" border="1">
<tbody>
<tr>
<td>İstediğiniz yemekleri seçiniz</td>
</tr>
<tr>
<td rowspan="3">Çorba</td>
<td><input type="radio" name="corba" value="Mercimek">Mercimek</td></tr>
<tr>
<td><input type="radio" name="corba" value="Ezogelin">Ezogelin</td></tr>
<tr>
<td><input type="radio" name="corba" value="Yayla">Yayla</td></tr>
<tr>
<td rowspan="3">Ara Sıcak</td>
<td><input type="radio" name="arasicak" value="barbunya">Barbunya</td></tr>
<tr>
<td><input type="radio" name="arasicak" value="dolma">Dolma</td></tr>
<tr>
<td><input type="radio" name="arasicak" value="biber">Biber</td></tr>
<tr>
<td rowspan="3">Ana Yemek</td>
<td><input type="radio" name="yemek" value="Adana Kebap">Adana Kebap</td></tr>
<tr>
<td><input type="radio" name="yemek" value="Tavuk">Tavuk</td></tr>
<tr>
<td><input type="submit" name="submit" value="Gönder"></td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</form>';}
else{
	error_reporting(0);
	$corb=$_POST['corba'];
	$sicak=$_POST['arasicak'];
	$anayemek=$_POST['yemek'];
	echo'<table width="250" border="1">';
	echo"
	<td><center><seçtiğiniz yemekler:</td>
	";
	if(!empty($corb))
	echo"<tr align=center><td><br>Çorba</br></td>
	<td>$corb</td></tr>";
	else
	echo"<tr align=center><td><br>Çorba</br></td>
	<td>Seçmediniz</td></tr>";
	if(!empty($sicak))
	echo"<tr align=center><td><br>Ara Sıcak</br></td>
	<td>$sicak</td></tr>";
	else
	echo"<tr align=center><td><br>Ara Sıcak</br></td>
	<td>Seçmediniz</td></tr>";
	if(!empty($anayemek))
	echo"<tr align=center><td><br>Ana Yemek</br></td>
	<td>$anayemek</td></tr>";
	else
	echo"<tr align=center><td><br>Ana Yemek</br></td>
	<td>Seçmediniz</td></tr>";
	echo"</table>";}
	?>
	