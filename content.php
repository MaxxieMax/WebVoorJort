<?php
 if (isset($_GET)) {
     include($_GET["content"] . ".php");
 }else{
     include("./home.php");
 }

?>