<?php
//Funskioni per shkrim ne nje fajll ne server
$fajllii=fopen('Teksti.txt','w') or die('Nuk u mundesua hapja');
$text='Kosova';
fwrite($fajllii,$text);
$text1=' Jugore';
fwrite($fajllii,$text1);

fclose($fajllii);
