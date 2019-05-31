<!DOCTYPE html>
<html>
<body>
<?php
/*6 Perdorimi i funksioneve per shkrim dhe lexim nga fajllat,
implementimi ne projekt i nje shembulli te tille.*/
//Funskioni per lexim nga fajlli
$fajlli=fopen("Teksti TCP.txt",'r') or die('Nuk u mundesua hapja');
echo fread($fajlli,filesize('Teksti TCP.txt'));
fclose($fajlli);

?>
</body>
</html>