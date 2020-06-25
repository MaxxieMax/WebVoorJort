<?php

if ( empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email");
} 
else 
{
    //eerste contact maken met database
    include("./connect_db.php");
    include("./sanitize.php");

    $email = sanitize($_POST["email"]);

    $sql = "SELECT * FROM `register` WHERE `email` = '{$email}'";

    //vuur het af naar de databse
    $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)) {
    header("Location: ./index.php?content=message&alert=emailexists");
}else{
    $password = "geheim";
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // insert querry
    $sql = "INSERT INTO `register` 
                        (`id`,
                        `email`,
                        `password`,
                        `userrole`)
                VALUES (NULL,
                        '$email',
                        '$password_hash',
                        'customer');";

// vuurt af naar database
mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);

if ($result) {
    $to = $email;
    $subject = "Activatie link voor uw account";

    $message = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Geachte aanmelder,</h1>
        <p>U heeft zich zojuist geregistreerd op de site www.Asterix_en_Obelix.nl</p>
        <p>Om te klikken op de onderstaande link kunt u het acrivatieproces voltooien.</P>
        <p>Klik op deze link <a href="http://www.welkom-bij-de-romeinen.nl/index.php?content=activate&id=' .$id. '&pwh=' .$password_hash. '">hier</a> om je te regristreren</P>
        <p>Bedankt voor het registreren</p>
        <p>Met vriendelijke groet,</p>
        <p>M. Breunesse</p>
        <p>CEO Asterix en Obelix</p>
    </body>
    </html>';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-UTF-8\r\n";
    $headers .= "From: admin@astrix.org\r\n";
    $headers .= "Cc: Max.breunesse@gmail.com\r\n";
    $headers .= "Bcc: ikjijenhij@gmail.com";

    mail($to, $subject, $message, $headers);
    header("Location: ./index.php?content=message&alert=succes");
} else 
{
    header("Location: ./index.php?content=message&alert=emailWrong");
}


}

    // echo mysqli_num_rows($result);

}


?>