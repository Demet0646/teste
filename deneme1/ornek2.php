<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if(!$_POST)
{
	echo '
	<form name="form"  method="post" action="ornek2.php">
   		<input type="checkbox" name="degerler[]"  value="elma"/>elma<p>
   		<input type="checkbox" name="degerler[]" value="armut"/>armut<p>
   		<input type="checkbox" name="degerler[]"  value="muz"/>muz<p>
   		<input type="checkbox" name="degerler[]"  value="ayva"/>ayva<p>
   		<input type="submit" name="buton1"  value="Gönder"/>
   		<input type="reset" name="buton2"  value="Temizle"/>
	</form>
';
}

else
{
	if(isset($_POST['degerler'])) 
   	{
		$meyveler=$_POST['degerler'];
		
		echo 'Seçtiğiniz meyveler: <br/>';
		echo "<table border='1' width='150px'>";
		foreach($meyveler as $meyve) 
		{	
			echo "
				<tr>
    				<td>$meyve</td>
				</tr>";
		}
		echo "</table>";

   	} 
	else 
		echo 'Hiç meyve seçmediniz.';
}

?>