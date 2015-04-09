<meta charset="utf-8">
<?php
if(!$_POST){
	echo '
<form id="form1" name="form1" method="post">
  <table width="400" border="1">
    <tbody>
      <tr>
        <td colspan="2">Demografik sorular</td>
      </tr>
      <tr>
        <td>Adınız soyadınız</td>
        <td><input type="text" name="ad"></td>
      </tr>
      <tr>
        <td>cinsiyet</td>
        <td><p>
          <input type="radio" name="radio"  value="bayan">
          bayan</p>
          <p>
            <label for="radio"> </label>
            <input type="radio" name="radio"  value="bay">
            bay
  <label for="radio2"> </label>
        </p></td>
      </tr>
      <tr>
        <td>Öğrenim Durumunuz</td>
        <td><p>
          <select name="sec">
            <option name="lisans">lisans</option>
            <option name="ylisans">yüksek lisans</option>
            <option name="doktora">doktora</option>
          </select>
        </p></td>
      </tr>
      <tr>
        <td>yaşamak istediğiniz ülke</td>
        <td><input type="checkbox" name="ulke[]" value="türkiye">
        <label for="checkbox">türkiye<br>
        </label>
        <input type="checkbox" name="ulke[]" value="ABD">
        <label for="checkbox2">ABD<br>
          <input type="checkbox" name="ulke[]" value="almanya">
          almanya<br>
          <input type="checkbox" name="ulke[]" value="avusturalya">
          avusturalya<br>
          <input type="checkbox" name="ulke[]" value="brezilya">
          brezilya<br>
        </label></td>
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
	$cinsiyet=$_POST["radio"];
	$ogrenim=$_POST["sec"];
	
	if(isset($_POST["ulke"])){
		$ulke=$_POST["ulke"];
		sort($ulke);
				echo' 
<table width="400" border="1">';

		

  echo "
  
    <tr>
      <td colspan='2'>Cevaplar</td>
      
    </tr>
	  <tr>
      <td>Adınız soyadınız</td>
      
	  <td>$ad</td>
    </tr>
    <tr>
      <td>Cinsiyet</td>
      <td>$cinsiyet</td>
    </tr>
    <tr>
      <td>Öğrenim Durumu</td>
      <td>$ogrenim</td>
    </tr>
    <tr>
      <td>Yaşamak istediğiniz ülke</td>
      <td>";
	  foreach($ulke as $deger){
		  echo "$deger <br>";}
	
		  echo "</td></tr>";
		  
		  echo"</table>";}
		  else{ 
		  echo' 
<table width="400" border="1">';
echo "
  
    <tr>
      <td colspan='2'>Cevaplar</td>
      
    </tr>
	  <tr>
      <td>Adınız soyadınız</td>
      
	  <td>$ad</td>
    </tr>
    <tr>
      <td>Cinsiyet</td>
      <td>$cinsiyet</td>
    </tr>
    <tr>
      <td>Öğrenim Durumu</td>
      <td>$ogrenim</td>
    </tr>
    <tr>
      <td>Yaşamak istediğiniz ülke</td>
      <td>ülke seçmediniz";}
	  echo"</table>";}
		  
?>

