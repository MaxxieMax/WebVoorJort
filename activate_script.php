<?php
    var_dump($_POST);
    include("./connect_db.php");
    include("./sanitize.php");

    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);

    if (empty($_POST["password"]) || empty($_POST["password_check"])) {
        header("Location: ./index.php?content=message&alert=empty-password&id=$id&pwh=$pwh");
    }else {

    }
?>