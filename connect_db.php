<?php

// maak een variable die maar een keer een waarde gegeven kan worden. oftewel maake 
// een constante.

define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASENAME", "romeinen");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

?>