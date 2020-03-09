<?php
  switch ($_GET["alert"]) {
    case 'no-email':
      echo'<div class="alert alert-info w-50 mx-auto"  role="alert">
      <h4 class="alert-heading">FOUT</h4>
      <p>Je moet wel wat invullen.</p>
      <hr>
      <p class="mb-0">Probeer maar nog een keer.</p>
    </div>';
    break;
    case 'emailexists':
    echo'<div class="alert alert-danger w-50 mx-auto"  role="alert">
    <h4 class="alert-heading">FOUT</h4>
    <p>Dit ingevulde email bestaat al.</p>
    <hr>
    <p class="mb-0">Vul een ander email in.</p>
    </div>';
  break;
  default;
  header("location: ./index.php?content=home");
  break;
  }
      header("Refresh: 3; url=./index.php?content=Registratie");
?>