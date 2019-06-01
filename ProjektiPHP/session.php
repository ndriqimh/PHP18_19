<?php
$konektimi = mysqli_connect("localhost", "root", "", "regjistrimi");
session_start();
//Ruajtja e sesionit
$shiko_perdoruesin = $_SESSION['login_user'];
// SQL Query e bon fetch te gjith informacionin e userit
$query = "SELECT username FROM perdoruesit WHERE username = '$shiko_perdoruesin'";
$ses_sql = mysqli_query($konektimi, $query);
$rreshti = mysqli_fetch_assoc($ses_sql);
$login_sesioni = $rreshti['username'];
?>