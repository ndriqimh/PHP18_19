<!DOCTYPE html>
<html>
<body>
<?php
session_start();
//Krijimi i sesioneve

$_SESSION['Antari2']='Ndriqim Hajrullahu';
$_SESSION['Antari3']='Muhamed Zahiri';
//Override apo modifikim
$_SESSION['Antari2']='Ndrqim Muhadri';
echo "Sesionet u vendosen<br>";
if(count($_SESSION) > 0) {
    echo "Sesionet jane aktivizuar.<br><br>";
} else {
    echo "Sesionet jane diaktivizuar.";
}

echo "Antari2:".$_SESSION['Antari2']."<br>";
echo "Antari3:".$_SESSION['Antari3']."<br>";

print_r($_SESSION);
//I hjek te gjitha sesion variablat
// session_unset();
//E shkatrron sesionin
// session_destroy();
//echo "Te gjitha sesion variablat jane larguar,dhe sesionet jane shktarruar";
?>
</body>
</html>