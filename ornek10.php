<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$maas=500;
$gun="salı";

switch ($gun){
   case "pazartesi":
   case "salı":
   case "çarşamba":
   case "perşembe":
   case "cuma":$maas+=50;break;
   case "cumartesi":
   default: $maas+=70;
}

echo "Maaş=$maas";
?>
