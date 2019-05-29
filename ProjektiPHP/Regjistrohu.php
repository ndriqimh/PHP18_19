<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    function valido($str){
        return trim(htmlspecialchars($str));
    }
    if (empty($_POST['emri'])) {
        $emriGabim = 'Ju lutem  mbusheni emrin!';
    } else {
        $name = valido($_POST['emri']);
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
            $emriGabim = 'Emri mund te permbaje vetem shkronja,numra dhe hapsira!';
        }
    }
    if (empty($_POST['email'])) {
        $emailGabim = 'Ju lutem shenoni emailin!';
    } else {
        $email = valido($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailGabim = 'Emaili i shenuar keq.Shenoni sipas formes: test@test.com';
        }
    }

    if (empty($_POST['fjalekalimi'])) {
        $fjalekalimiG = 'Fjalekalimi nuk duhet te jete i zbrazur!';
    } else {
        $password = valido($_POST['fjalekalimi']);
        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',$password)) {
            $fjalekalimiG = 'Fjalekalimi duhet te permbaje: 8 ose me shume karaktere,se paku nje shkronje dhe nje numer.';
        }
    }
    if (empty($emriGabim) && empty($emailGabim) && empty($fjalekalimiG)) {
        $con = mysqli_connect('localhost','root','');
        if(!$con)
        {
            echo 'Nuk jeni lidhur me serverin!';
        }
        if(!mysqli_select_db($con,'regjistrimi'))
        {
            echo "Databaza nuk eshte selektuar me rregull";
        }
        $Emri = $_POST['emri'];
        $Email = $_POST['email'];
        $Fjalekalimi = $_POST['fjalekalimi'];

        $sql = "INSERT INTO perdoruesit (username,email,password) VALUES ('$Emri','$Email','$Fjalekalimi')";
        $rez = mysqli_query($con,$sql);
        if(!$rez){
            echo "Nuk jeni regjistruar me sukses.Emaili i shenuar egziston,ju lutem shenoni tjeter email!";
        }
        else{
            echo "Jeni regjistruar me suskses.Klikoni per tu futur <a href='Futu.php'><b>Futu</b></a>";
        }

exit();
}

}

?>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Regjistrimi-Revista Drita</title>
    <link rel="stylesheet" href="Regjistrimi.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <style type="text/css">
        .error {
            color:red;
        }
    </style>
</head>
<body>
<div class="signup-form">
    <form action="" method="POST">
        <h1>Regjistrohu</h1>
        <input type="text" name="emri" placeholder="Emri i plot&euml;" class="txtb" value="<?php if (isset($name)) echo $name ?>">
        <span class="error"><?php if (isset($emriGabim)) echo $emriGabim ?></span>
        <input type="email" name="email" placeholder="E-posta" class="txtb" value="<?php if (isset($email)) echo $email ?>">
        <span class="error"><?php if (isset($emailGabim)) echo $emailGabim ?></span>
        <input type="password" name="fjalekalimi" placeholder="Fjal&euml;kalimi" class="txtb" value="<?php if (isset($password)) echo $password ?>">
        <span class="error"><?php if (isset($fjalekalimiG)) echo $fjalekalimiG ?></span>
        <input type="submit" name="dergo" value="Krijo llogarin&euml;" class="signup-btn">
        <a href="Futu.php">Posedoni nj&euml; llogari?</a>
    </form>
</div>
</body>
</html>


