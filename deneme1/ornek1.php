<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form id="form1" name="form1" method="post" action="ornek1yaz.php">
  <p>isim soysim
    <label for="isim"></label>
  <input type="text" name="isim" id="isim" /> 
     mesajınız 
     <label for="ileti"></label>
     <textarea name="ileti" id="ileti" cols="45" rows="5"></textarea>
  </p>
  <p>email 
    <label for="mail"></label>
    <input type="text" name="mail" id="mail" />
  </p>
  <p> 
  <?php
 $sayi1=rand(1,10);
 $sayi2=rand(1,10);
echo $sayi1, "+" , $sayi2, "=?";


   
 

   ?>
 işlemi yapınız?</p>
  <p>
    <label for="sonuc"></label>
    <input type="text" name="sonuc" id="sonuc" />

  </p>
  <p>
    <label for="sonuc"></label>
  <input type="hidden" name="hesap" id="sonuc" />
    <input type="submit" name="hesap" id="hesap" value="Gönder" />
  </p>
</form>
