<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_PODT['message']);
    $to = "cynthiaflorencemuluh@gmail.com";
    $subject="New Contact Form Submission from $name";
    $body="Name:$name\nEmail:
    $email\n\nMessage:\n$message";
    $headers = "From: $email";
    if (mail($to, $subject,$body,$headers)){
        echo "<p class='success'>Thank you, $name! Your message has been sent.</p>";
    } else{
        echo "<p class='error'> Sorry, something went wrong. Please try again later.</p>";
    }

    }

?>