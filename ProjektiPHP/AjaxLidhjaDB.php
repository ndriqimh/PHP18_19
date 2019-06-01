<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'regjistrimi');

if(isset($_POST['email'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    //  query për përditësimin e të dhënave
    $result  = mysqli_query($connection , "UPDATE user SET username='$username' , password='$password' , email = '$email' WHERE id='$id'");
    if($result){
        echo 'Të dhënat u përditësuan';
    }
}
?>