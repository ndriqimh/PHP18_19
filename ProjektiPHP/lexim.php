<!DOCTYPE html>
<html>
<body>
<form action="Errori2.php" method="post">
    <button type="submit">ErrorHandlerF</button>
</form>
<?php
/*6 Perdorimi i funksioneve per shkrim dhe lexim nga fajllat,
implementimi ne projekt i nje shembulli te tille.*/
//Funskioni per lexim nga fajlli
$fajlli=fopen("Teksti TCP.txt",'r') or die('Nuk u mundesua hapja');
echo fread($fajlli,filesize('Teksti TCP.txt'));
fclose($fajlli);
//Error Handler Tipi die()
if(!file_exists('Teksti.txt')){
    die('Fajlli nuk u gjet');
}else{
    $fajlli=fopen('Teksti.txt','r');
}

?>

</body>
</html>