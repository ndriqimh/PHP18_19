<?php
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $mesazhi = $emri . " " . $mbiemri . " wrote the following:" . "\n\n" . $_POST['mesazhi'];
    $mesazhi2 = "Here is a copy of your mesazhi " . $emri . "\n\n" . $_POST['mesazhi'];

    $headers = "Nga:" . $from;
    $headers2 = "Nga:" . $to;
    mail($to,$subject,$mesazhi,$headers);
    mail($from,$subject2,$mesazhi2,$headers2); // sends a copy of the mesazhi to the sender
    echo "Mail Sent. Thank you " . $emri . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}
?>