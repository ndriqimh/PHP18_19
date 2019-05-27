<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/9e/8e/ab/9e8eab9ddabbefcb22a6365a9ff71311.png" sizes="16x16" />
    <title>Gjera-RevistaDrita</title>
    <style>
        /*fromatimi gjeneral i teksit*/
        html,body,header,footer,hgroup,nav,article,section,figure,figcaption,h1,h2,h3,ul,li,div,p,img
        {
            margin: 0;
            padding: 0;
            font-size: 100%;
            border: 0;
        }
        .faqja {
            width: 100%;
            min-width: 500px;
            max-width: 1400px;
            margin: auto;
        }
        h1,h2,h3,nav,footer
        {
            font-family: "Trebuchet MS" ,sans-serif;


        }
        body{
            font-family: Georgia,"Times New Roman";
            background-color: #e0e0e0;
            font-size: 100%;
            margin: 0em 4em 0.5em 4em;


        }
        h1{
            font-size: 24px;
            font-size: 1.5rem;
            color:black;
            padding: 0.8em;
            margin: 0;
        }
        h2{
            font-size: 25px;
        }
        h3{
            font-size: 18px;
            border-bottom: solid 1pt #999999;
        }
        .emri{
            font-size:5em;
            font-weight: normal;
            font-family: "Goudy Old Style","Times New Roman";
            text-transform: capitalize;
            margin-top: -0.5em;
        }
        .emri1{
            font-family: 'Titillium Web', sans-serif,serif;
            margin-top: -4.2em;
            font-size: 15px;
        }
        p{
            font-size: 16px;
        }
        /*stilizimi i linqeve*/
        a:link{
            color: white;
        }
        a:hover{
            background-color: #ffcccc;
        }
        /*stilizimi i header,footer,nav*/
        header {
            color: white;
            background-color: #333333;
            padding: 0.8em;
            margin: 0em -4em 0em -4em;
            position: relative;

        }
        footer{
            color:white;
            background-color: #333333;
        }
        .f{
            color: white;
        }
        .menuja{
            background-color: #e0e0e0;
            margin: 0em 0em 0em -4em;
            position: relative;
            left: 12px;
            padding: 5px;
            top: 5px;
        }
        .menuja1{

            text-decoration: none;
            color: black;
            font-family: "trebuchet ms",arial,helvetica,Georgia,"Times New Roman";
        }
        .a{
            background-color: #333333;
            font-family: "trebuchet ms",arial,helvetica,sans-serif;
            position: relative;

            left: 2px;
            text-decoration: none;
            color: white;

        }
        footer{
            margin-top: 1em;
            padding: 0.5em;
            font-weight: normal;
            font-style: oblique;

        }
        footer p{
            font-size: 14px;

        }
        .pjesa{
            display: flex;

        }
        .pjesa1{
            padding-left: 1em;
            border: solid 2px;
            margin-right: 2%;
            width: 49%;
        }
        .pjesa2{
            padding-left: 1em;
            border: solid 2px;
            width: 49%;
        }
    </style>
</head>
<body>
<div class="faqja">
    <header>
        <small><a class="a" href="Regjistrohu.html">Regjistrohu</a></small>
        <p class="lidhja" style="display: inline"><small>|</small></p>
        <small><a class="a" href="Futu.html">Futu</a></small>
        <p class="lidhja" style="display: inline"><small>|</small></p>
        <small><a class="a" href="https://www.rss.com">RSS</a></small>
        <p class="lidhja" style="display: inline"><small>|</small></p>
        <small><a class="a" href="https://www.koha.net/arkivi/">Lajme t&euml; vjetra</a></small>
        <svg height="30" width="130" style="position:absolute; right:6px; bottom: 7px;">
            <circle cx="20" cy="15" r="12" stroke="white" stroke-width="1" fill="white" />
            <circle cx="50" cy="15" r="12" stroke="white" stroke-width="1" fill="white" />
            <circle cx="80" cy="15" r="12" stroke="white" stroke-width="1" fill="white" />
            <circle cx="110" cy="15" r="12" stroke="white" stroke-width="1" fill="white" />
        </svg>
    </header>
    <center>
        <h1 class="emri">Revista Drita</h1>
    </center>
    <center><h2 class="emri1"> Te gjitha lajmet e fundit nga bota</h2></center>
    <hr style="margin: 1em -3.1em 0em -3.1em;">
    <hr style="position: relative; top:-7px; margin: 0em -3.1em 0em -3.1em; ">
    <p class="menuja"><small>
            <a href="Sht&euml;pia.html" class="menuja1" style="color:black;">Sht&euml;pia</a>&nbsp;&nbsp;
            <a href="Sporti.html" class="menuja1">Sporti</a> &nbsp;&nbsp;
            <a href="Shkencë.html" class="menuja1">Shkenca</a> &nbsp;&nbsp;
            <a href="Kulture.html" class="menuja1" style="color:black;">Kultura</a> &nbsp;&nbsp;
            <a href="Loja.html" class="menuja1">Loja</a> &nbsp;
            <a href="Rreth.html" class="menuja1">Rreth</a> &nbsp;&nbsp;
            <a href="Gjera.php" class="menuja1" style="color: black;text-shadow: 2px 2px 5px red;" > Gjera </a> </small> </p>
    <hr style="margin: 1em -3.1em 0em -3.1em;">
    <hr style="position: relative; top:-7px; margin: 0em -3.1em 0em -3.1em; ">


</div>
<h2 style="text-align: center;margin: 1em 0em 1em 0;">Vargjet </h2>
<div class="pjesa">
    <div class="pjesa1">
    <?php
        echo "<h4>Stafi jone perbehet nga: </h4>";
        $stafi = array("Ndriqimi", "Muhamedi", "Ndriqa");
        echo $stafi[0], "\t";
        echo $stafi[1], "\t";
        echo $stafi[2], "\t";
        echo "<br>";
        echo "<h4>Gjenerimi i vargut me foreach</h4>";
        foreach ($stafi as $val){
            echo $val. "\t";
            }
        echo "<h4>Vargjet associative</h4>";
        $mosha = array("Ndriqimi"=>17,"Muhamedi"=>20,"Ndriqa"=>23);
        foreach($mosha as $x => $x_value) {
            echo "Emri=" . $x . ", Mosha=" . $x_value;
            echo "\n";
        }

    ?>
    </div>
    <div class="pjesa2">
        <?php
        echo "<h4>Vargjet multidimensionale</h4>";
        $paga = array
        (
            array(1,"Genci",500),
            array(2,"Joni",550),
            array(3,"Eti",600)
        );

        for ($row = 0; $row < 3; $row++) {
            for ($col = 0; $col < 3; $col++) {
                echo $paga[$row][$col] . "  ";
            }
            echo "<br/>";
        }
        echo "<h4>Sortimet e vargjeve </h4>";
        $emrat = array("Diti"=>34,"Loriki"=>12,"Edi"=>52);
        echo "Sortimi normal: ";
        sort($emrat);

        foreach($emrat as $x => $x_value) {
            echo "Emri=" . $x . ", Vlera=" . $x_value;
            echo "\n";
        }
        echo "<br>";
        echo "\n Rsort: ";
        rsort($emrat);
        foreach($emrat as $x => $x_value) {
            echo "Emri=" . $x . ", Vlera=" . $x_value;
            echo "\n";
        }
        echo "<br>";
        echo "\n Asort: ";
        asort($emrat);
        foreach($emrat as $x => $x_value) {
            echo "Emri=" . $x . ", Vlera=" . $x_value;
            echo "\n";
        }
        echo "<br>";
        echo "\n Ksort: ";
        ksort($emrat);
        foreach($emrat as $x => $x_value) {
            echo "Emri=" . $x . ", Vlera=" . $x_value;
            echo "\n";
        }
        echo "<br>";
        echo "\n Arsort: ";
        arsort($emrat);
        foreach($emrat as $x => $x_value) {
            echo "Emri=" . $x . ", Vlera=" . $x_value;
            echo "\n";
        }
        echo "<br>";
        echo "\n Krsort: ";
        krsort($emrat);
        foreach($emrat as $x => $x_value) {
            echo "Emri=" . $x . ", Vlera=" . $x_value;
            echo "\n";
        }


        ?>
    </div>
</div>

<div>
<footer>
    <p><a href="#" class="f">Sht&euml;pia</a> | <a href="#" class="f">Katalogu</a></p>
    <p>Te drejtat e rezervuara &copy;Fiek2018</p>
</footer>
</div>
</body>
</html>