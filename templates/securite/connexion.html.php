<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="<?=PATH_PUBLIC."css".DIRECTORY_SEPARATOR."style.css"?>">

</head>
<body >
<?php
if(isset($_SESSION[KEY_ERROR])){
    $errors=$_SESSION[KEY_ERROR];
    unset($_SESSION[KEY_ERROR]);
}


?> 

<div id="container">
           
            <div id="connexion">
                <h1>Connexion</h1></div>
                <?php if(isset($errors['connexion'])):?>
                    <span style="color:red;
                    font-size:13px";><?=$errors['connexion']?></span>
                <?php endif ?>
             <form action="<?=WEBROOT."?controller=securite&action=connexion"?>" method="POST">
                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion" >
             
           
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" >
              
                <?php if(isset($errors['login'])):?>
                    <span style="color:red;
                    font-size:13px";><?=$errors['login']?></span>
                <?php endif ?>
                <br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >
             
                <?php if(isset($errors['password'])):?>
                <span style="color:red;
                font-size:13px"><?=$errors['password']?></span>
                <?php endif ?>
             
                <input type="submit" id='submit1' value='LOGIN' >
                
                <a href="#"><span>s'inscrire pour jouer</span></a>
               
            </form>
        </div>

        <script src="<?=PATH_PUBLIC."js".DIRECTORY_SEPARATOR."script.js"?>"></script>
</body>
</html>
