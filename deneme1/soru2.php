
<meta charset="utf-8">
<?php
if(!$_POST){
	echo'
<form id="form1" name="form1" method="post">
  <table width="400" border="0">
    <tbody>
      <tr>
        <td>Adınız soyadınız:</td>
        <td><input type="text" name="ad"></td>
      </tr>
      <tr>
        <td>Başlık</td>
        <td><input type="text" name="baslik"></td>
      </tr>
      <tr>
        <td>Tarih:</td>';
		$tarih=date("d.m.Y,G:i");
		echo"
        <td>$tarih<input type='hidden' name='tarih' value=$tarih></td>";
		echo'
      </tr>
      <tr>
        <td>Yorum:</td>
        <td><textarea name="yorum"></textarea></td>
      </tr>
      <tr>
        <td>Doğrulama Kodu:<br>';
		$k=substr(md5(rand()),0,5);
		
        echo "$k 
		<input type='hidden' name='k' id='hiddenField' value=$k /></td>";
		
		echo'
		<td><input type="text" name="kod"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="Gönder"></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>';}
else{
	$ad=$_POST["ad"];
	$baslik=$_POST["baslik"];
	$tarih=date("d.m.Y,G:i");
	$yorum=$_POST["yorum"];
	$kod=$_POST["kod"];
	$gizli=$_POST["k"];
	
	echo'<table width="400" border="0">';
	if($kod==$gizli){
		
		echo"
 
    <tr>
      <td>Adınız Soyadınz</td>
      <td>:</td>
	  <td>$ad</td>
    </tr>
    <tr>
      <td>Başlık</td>
	  <td>:</td>
      <td>$baslik</td>
    </tr>
    <tr>
      <td>Tarih</td>
	  <td>:</td>
      <td>$tarih</td>
    </tr>
    <tr>
      <td>Yorum</td>
	  <td>:</td>
      <td>$yorum</td>
    </tr>";}

else {echo "Hatalı kod girdiniz";}
  echo'
</table>';
}
?>

		
