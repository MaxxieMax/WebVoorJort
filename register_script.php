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

if(mysqli_num_rows($result)){
    header("location: ./index.php?content=message&alert=emailexists");
}else{
    $password = "geheim";
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    echo $password_hash;exit();

}

    // echo mysqli_num_rows($result);

}


?>