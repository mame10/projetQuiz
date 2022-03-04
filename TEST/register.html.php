<?php 
require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
if(isset($_SESSION[KEY_ERRORS])){
    $errors = $_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}    

    function vers(string $ctr, string $action){
        echo "<input type='hidden' name='controller' value='$ctr'>
         <input type='hidden' name='action' value='$action'>";
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.inscription.css"?>">
    <title>Inscription</title>
</head>

<body>
    <div class="header">
        <i><img src="img/logo-QuizzSA.png"></i>
        <h4 style="width: 94%;">Le plaisir de jouer</h4>
    </div>
    <div class="main">
        <div class="container">
            <form action="<?=WEB_ROOT?>" method="POST" class="form" id="form">
                <h5>S'inscrire</h5>
                <small class="gray">Pour tester votre niveau de culture generale</small>
                <?php vers("securite", "inscription") ?> 
                <div class="form-control">
                    <!-- <label for="username">Prenom</label> -->
                    <input id="username" name="prenom" type="text" placeholder="Entrer votre prenom">
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <!-- <label for="username">Nom</label> -->
                    <input id="username" name="nom" type="text" placeholder="Entrer votre nom">
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <!-- <label for="email">Login</label> -->
                    <input id="email" name="login" type="text" placeholder="Entrer votre login">
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <!-- <label for="password">Password</label> -->
                    <input id="password" name="password" type="password" placeholder="Entrer votre password">
                    <small>Error Message</small>
                </div>
                <div class="form-control">
                    <!-- <label for="password2">Confirme password</label> -->
                    <input id="password2" name="password2" type="password" placeholder="Confirmer votre password">
                    <small>Error Message</small>
                </div>
                <div class="element">
                    <small>Avatar</small>
                    <a href="#">Choisir un fichier</a>
                </div>
                <input type="submit" class="button"  name="inscription" value="inscription">
                <!-- <button>submit</button> -->
            </form>
            <div class="avatar">
                <div class="image">
                    <img src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."user.png"?>" alt=""> 
                </div>

            </div>
        </div>
    </div>
    
    <script src="<?=WEB_ROOT."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>
</body>


</html>