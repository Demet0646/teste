<meta charset="utf-8">
<?php
error_reporting(0);
if(!$_POST){	echo'
<form name="form1" method="post" action="">
  <table width="200" border="0">
    <tbody>
      <tr>
        <td colspan="2">exp(x) hesaplama</td>
      </tr>
      <tr>
        <td>x değeri:</td>
        <td><input type="text" name="islem"></td>
      </tr>
      <tr>
        <td><input type="submit" value="gönder"></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>';}

else {
	$islem=$_POST["islem"];
	$faktoriyel=1;
	for($i=1;$i<=20;$i++){
		$faktoriyel=$faktoriyel*$i;
		$formul=(pow($islem,$i)/$faktoriyel)+($formul);
		$ex=exp($islem);}
		echo "girilen sayı:$islem <br> verilen işlemle 20 adımda hesaplama:" , $formul+1 , "<br> exporansiyel hesaplama:$ex";}
		?>
		