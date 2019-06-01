<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['emri']) || empty($_POST['fjalekalimi'])) {
        $error = "Emri ose fjalekalimi nuk jane ne rregull!";
    }
    else {
        $username = $_POST['emri'];
        $password = $_POST['fjalekalimi'];
        $konektimi = mysqli_connect("localhost", "root", "", "regjistrimi");
        $query = "SELECT username, password FROM perdoruesit WHERE username=? AND password=? LIMIT 1";
        // Mbrojtja ndaj MySQL injections
        $s = $konektimi->prepare($query);
        $s->bind_param("ss", $username, $password);
        $s->execute();
        $s->bind_result($username, $password);
        $s->store_result();
        if ($s->fetch())
        {
            $_SESSION['login_user'] = $username;
            header("location: profile.php");
        }else{
            $error = "Keni shtypur emrin ose fjalekalimin gabim!";
        }
    }
    mysqli_close($konektimi);
}
?>