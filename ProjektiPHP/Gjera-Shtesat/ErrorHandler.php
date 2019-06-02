<?php
    function Errori($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//Vendosja e Error Handler
set_error_handler("Errori");

//trigger error
echo($test);
?>

