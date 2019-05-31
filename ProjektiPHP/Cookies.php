<?php
//Kriimi i coookies me variabla si statike
$cookie_name='cookie';
$cookie_value='Ndriqim Muhadri';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //Nje dite
//Kontrollimi a eshte vendos
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie nuk eshte kriju<br>";
}else{
    echo "Cookie eshte kriju me emrin ".$cookie_name."<br>";
    echo "Vlera e cookies eshte:" . $_COOKIE[$cookie_name];"<br>";
}
//Fshierja e coookies
//setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
//echo " Cookie u fshi<br>";

//Ruajta ne varg e cookies
print_r($_COOKIE);
echo "<br>";
//Kontrollimi
if(count($_COOKIE) > 0) {
    echo "Cookies jane aktivizuar.<br><br>";
} else {
    echo "Cookies jane diaktivizuar.";
}
