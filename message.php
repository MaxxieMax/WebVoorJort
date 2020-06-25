<?php

$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id = (isset($_GET["id"]))? $_GET["id"]: "default";
$pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "default";

  switch ($_GET["alert"]) {
    case 'no-email':
      echo'<div class="alert alert-info w-50 mx-auto"  role="alert">
      <h4 class="alert-heading">FOUT</h4>
      <p>Je moet wel wat invullen.</p>
      <hr>
      <p class="mb-0">Probeer maar nog een keer.</p>
    </div>
    <div class="col-6">
    <img src="./img/gif.gif" id="gif" alt="romeinen"  >
    </div>';
    header("location: ./index.php?register");
    break;
    case 'emailexists':
    echo'<div class="alert alert-danger w-50 mx-auto"  role="alert">
    <h4 class="alert-heading">FOUT</h4>
    <p>Dit ingevulde email bestaat al.</p>
    <hr>
    <p class="mb-0">Vul een ander email in.</p>
    </div>
    <div class="col-6">
    <img src="./img/gif.gif" id="gif" alt="romeinen"  >
    </div>';
    header("location: ./index.php?content=register");
  break;
  case 'emailWrong':
    echo'<div class="alert alert-danger w-50 mx-auto"  role="alert">
    <h4 class="alert-heading">FOUT</h4>
    <p>Dit ingevulde email is niet goed gegaan.</p>
    <hr>
    <p class="mb-0">Vul het opnieuw in.</p>
    </div>
    <div class="col-6">
    <img src="./img/gif.gif" id="gif" alt="romeinen"  >
    </div>';
    header("location: ./index.php?content=register");
  break;
  case 'succes':
    $time = 6;
    $page = "login";
    echo'<div class="alert alert-success w-50 mx-auto"  role="alert">
    <h4 class="alert-heading">succes</h4>
    <p>De aanmelding is goed gegaan.</p>
    <hr>
    <p class="mb-0">u krijgt een email met de regristratie link.</p>
    </div>';
    header("location: ./index.php?content=home");

  break;
  // case 'fout-alert':
  //   echo'<div class="alert alert-danger w-50 mx-auto"  role="alert">
  //   <h4 class="alert-heading">FOUT</h4>
  //   <p>U kunt niet op deze manier van pagina veranderen.</p>
  //   <hr>
  //   <p class="mb-0">Probeer het nu op de goede manier.</p>
  //   </div>';
  //   header("Refresh: 3; ./index.php?content=home");
  // break;
  case 'empty-password':
    $time = 6;
    echo'<div class="alert alert-warning w-50 mx-auto"  role="alert">
    <h4 class="alert-heading">FOUT</h4>
    <p>U heeft een van de beide wachtwoorden niet ingevult. Probeer het opnieuw.</p>
    </div>';
    header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
  break;
  default;
  header("location: ./index.php?content=home");
  break;
  }
      // header("Refresh: 3; url=./index.php?content=$page");
?>
