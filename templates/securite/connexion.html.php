<!-- Vue de connexion -->
<?php 
   if (isset($_SESSION[KEY_ERROR])) {
    $errors = $_SESSION[KEY_ERROR];
    unset($_SESSION[KEY_ERROR]);
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
    <link rel="stylesheet" href="<?= PATH_PUBLIC . "css" . DIRECTORY_SEPARATOR . "style.css" ?>">
    <title>Login</title>
</head>

<body>
    <div class="header">
        <i><img src="img/logo-QuizzSA.png"></i>
        <h4 style="width: 94%;">Le plaisir de jouer</h4>
    </div>
    <div class="main">
        <div class="container">
            <form action="<?=WEBROOT?>" method="POST" class="form" id="form">
                <div class="entete">
                    <h5>Login form</h5>
                    <p> <a href="#">X</a> </p>
                </div>
                <div class="form-control">
                <?php vers("securite", "connexion") ?> 

                <?php if(isset($errors['connexion'])){ ?>
                    <p style="color: red"> <?=$errors['connexion'];?> </p>
                <?php } ?>   
                </div>
                
                <div class="form-control">
                <div class="log"  id="log">
                        <input id="email" name="login" type="text" placeholder="Login">
                        <img src="img/ic-login.png" alt="">
                </div> <br>
                    <small> </small>
                </div> 
                <div class="form-control">
                    <!-- <label for="password">Password</label> -->
                    <div class="log"  id="pass">
                        <input id="password" name="password" type="password" placeholder="Password" >
                        <img src="img/ic-password.png" alt="">
                    </div> <br>
                    <small></small>
                </div>
                <div class="footer">
                    <button type="submit" value="connexion" name="connexion" disabled  id="btn">Connexion</button>
                    <a href="<?= WEBROOT."?controller=securite&action=inscription" ?>" class="inscrire">S'inscrire pour jouer?</a>
                </div>

            </form>
        </div>
    </div>
   
 
    
    <script src="<?=PATH_PUBLIC."js".DIRECTORY_SEPARATOR."script.js" ?>"></script>
</body>

</html>