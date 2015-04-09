<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(!$_POST){
	echo'
	<form id="form1" name="form1" method="post">
	<table width="500" border="0">
	<tbody>
	<tr>
	<td colspan="2">Hangi Tahmin</td>
	</tr>
	<tr>
	<td>Ahmet</td>
	<td><input type="text" name="tahmin" value="754"></td>
	</tr>
	<tr>
	<td>Mehmet</td>
	<td><input type="text" name="tahmin2" value="458"></td>
	</tr>
	<tr>
	<td>Mustafa</td>
	<td><input type="text" name="tahmin3" value="159"></td>
	</tr>
	<tr>
	<td>Üretilen sayı</td>';
	$rast=rand(1,1000);
	echo"$rast
	<td><input type='hidden' name='rast' id='hiddenField' value=$rast></td>";
	
	echo'
	
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="Gönder"></td>
	<td>&nbsp;</td>
	</tr>
	</tbody>
	</table>
	</form>';}
	else
	{
		
		$t1=754;
		$t2=458;
		$t3=159;
		echo"Ahmet=$t1<br>";
		echo"Mehmet=$t2<br>";
		echo"Mustafa=$t3<br>";
		$rast=$_POST['rast'];
		$t1=$_POST['tahmin'];
		$t2=$_POST['tahmin2'];
		$t3=$_POST['tahmin3'];
		$f1=abs($rast-$t1);
		$f2=abs($rast-$t2);
		$f3=abs($rast-$t3);
		echo"Rastgele üretilen sayı=$rast<br>";
		if(($f1<$f2)&&($f1<$f3))
		{
			echo" en yakın tahmin Ahmet'in=$t1<br>";
		}
		elseif(($f2<$f1)&&($f2<$f3))
		{
			echo"en yakın tahmin Memet'in=$t2<br>";
		}
		elseif(($f3<$f2)&&($f3<$f1))
		{
			echo"en yakın tahmin Mustafa'nın =$t3<br>";
		}
	}
?>
		
		