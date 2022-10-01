<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailTo = "ricardo.o.knight@gmail.com";
$mailheader = "From:".$name."<".$email.">\r\n";


}
mail($mailTo, $subject, $message, $mailheader) ;

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>
';


?>