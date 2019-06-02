<!DOCTYPE html>
<html>
<title>Leximi-Fjallit</title>
<style>
    .gabimi{
        margin-top: 10em;
        border: dashed 2px red;
        text-align: center;
    }
    .gabimi button{
        padding: 0.5em;
        margin-top: 10px;
        margin-bottom: 10px;
        background: transparent;
        color: #fff;
        border-radius: 44px;
        cursor: pointer;
        transition: 0.8s;
        font-size: 17px;
        border: solid 2px black;
        font-weight: bold;
    }
    .gabimi button:hover{
        background: red;
    }
    a{
        text-decoration: none;
        color:black;
    }
</style>
<?php
echo "<p style='text-align: center;font-weight: bold;font-size: 2em;'>Shkrimi ne fajll<p/>";
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
<body>
<div class="gabimi">
    <h3>Implementimi i nje gabimi</h3>
<button type="submit"><a href="Errori2.php">ErrorHandlerF</a></button>
</div>
</body>
</html>