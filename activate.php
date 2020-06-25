<?php
// if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"])) ){
//     header("location: ./index.php?content=message&alert=fout-alert");
// }
?>


<main class="container">
    <h1 id="textE">Wachtwoord aanmaken</h1>
    <br>

    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=activate_script" method="POST">
                <div class="form-group">
                    <label for="inputPassword" id="textE">Kies een nieuw wachtwoord:</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
                    <small id="textHelp" class="form-text text-muted">kies een wachtwoord
                    </small>
                </div>
                <div class="form-group">
                    <label for="inputPasswordCheck" id="textE">Bevestig het nieuwe wachtwoord:</label>
                    <input type="password" name="password_check" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
                    <small id="passwordHelpCheck" class="form-text text-muted">controle voor het wachtwoord
                    </small>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-primary">Activeer</button>
            </form>
        </div>

        <div class="col-6">
            <img src="./img/gif.gif" id="gif1" alt="romeinen"  >
        </div>
    </div>
</main>