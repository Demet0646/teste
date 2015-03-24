<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


 

<form name="form1" method="post" action="2.php">

	<table width="498" border="0">
  <tr>
    <td width="153" height="277"><table width="131" height="199" border="0">
      <tr>
        <td width="121">İsim Soyisim</td>
      </tr>
      <tr>
        <td>
          <label for="textfield"></label>
          <input type="text" name="isim" id="textfield" />
</form></td>
      </tr>
      <tr>
        <td>EMail</td>
      </tr>
      <tr>
        <td>
          <label for="textfield2"></label>
          <input type="text" name="mail" id="textfield2" />
        </form></td>
      </tr>
      <tr>
        <td>
		<?php

$say1=rand(1,100);
$say2=rand(1,100);

$sonuc=$say1+$say2;


echo "$say1 + $say2 = işlemini yapınız

		  <input type='hidden' name='sonuc' id='hiddenField' value=$sonuc />
	    </form></td>";
?>
	
      </tr>
      <tr>
        <td>
          <label for="textfield3"></label>
          <input type="text" name="islem" id="textfield3" />
        </form></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        &lt; </tr>
   
    <td width="335">
<tr>
        <td>Mesajınız</td>
</tr>
      <tr>
        <td height="118">
          <label for="textarea"></label>
          <textarea name="mesaj" id="textarea" cols="45" rows="5"></textarea>
        </form></td>
      </tr>
<tr>
        <td height="78">
          <input type="submit" name="gonder" value="Gönder" />
    </td>
      </tr>
</form>
