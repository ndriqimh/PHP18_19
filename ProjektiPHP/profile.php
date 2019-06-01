<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: Futu.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Revista Drita </title>
    <style>
        #profili
        {
            padding:50px;
            border:1px dashed grey;
            font-size:20px;
            background-color:#DCE6F7
        }
        #dalja
        {
            float:right;
            padding:5px;
            border:dashed 1px gray
        }
    </style>
</head>
<body>
<div id="profili">
    <b id="m">Welcome : <i><?php echo ucwords($login_sesioni); ?></i></b>
    <b id="dalja"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>