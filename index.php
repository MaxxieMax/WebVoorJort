<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="stylesheet" href="./css/style.css">


    <title>De Romeinen</title>
  </head>
  <body>
    <main>
        <!-- banner -->
        <div class="row">
            <div class="col-12">
                <?php include("./banner.php"); ?>
            </div>
        </div>

        <!-- navbar -->
        <div class="row">
            <div class="col-12">
                <?php include("./navbar.php"); ?>
            </div>
        </div>

        <!-- content -->
        <div class="row">
            <div class="col-12">
                <?php             if ( isset($_GET["content"]) ){
                    include("./" . $_GET["content"] . ".php");
                  }
                  else {
                    include("./home.php");
                  } ?>
                  <!-- <?php include("./home.php"); ?> -->
            </div>
        </div>

        <br>

        <!-- footer -->
        <div class="row">
            <div class="col-12">
                <?php include("./footer.php"); ?>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>