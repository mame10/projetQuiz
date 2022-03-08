<?php

function vers(string $ctr, string $action){
    echo "<input type='hidden' name='controller' value='$ctr'>
     <input type='hidden' name='action' value='$action'>";
 }
?>
<div class="main">
        <div class="container">
            <form action="<?=WEBROOT?>" method="POST" class="form" id="form">
                <h5>S'inscrire</h5>
                <?php if(isset($errors['connexion'])){ ?>
                    <p style="color: red"> <?=$errors['connexion'];?> </p>
                <?php } ?>   
                <small class="gray">Pour proposer des Quiz</small>
                <?php vers("securite", "inscription") ?> 
                
                <div class="form-control" id="second">
                    <!-- <label for="username">Prenom</label> -->
                    <input id="second_name" name="prenom" type="text" placeholder="Entrer votre prenom">
                    <?php if(isset($errors['prenom'])){ ?>
                    <small style="color: red"> <?=$errors['prenom'];?></small>
                    <?php } ?>  
                </div>
                <div class="form-control" id="first_name">
                    <!-- <label for="username">Nom</label> -->
                    <input id="username" name="nom" type="text" placeholder="Entrer votre nom">
                    <?php if(isset($errors['nom'])){ ?>
                    <small style="color: red"> <?=$errors['nom'];?></small>
                    <?php } ?> 
                </div>
                <div class="form-control" id="log">
                    <!-- <label for="email">Login</label> -->
                    <input id="email" name="login" type="text" placeholder="Entrer votre login">
                    <?php if(isset($errors['login'])){ ?>
                    <small style="color: red"> <?=$errors['login'];?></small>
                    <?php } ?> 
                </div>
                <div class="form-control" id="password">
                    <!-- <label for="password">Password</label> -->
                    <input id="pass1" name="password" type="password" placeholder="Entrer votre password">
                    <?php if(isset($errors['password'])){ ?>
                    <small style="color: red"> <?=$errors['password'];?></small>
                    <?php } ?> 
                </div>
                <div class="form-control" id="password2">
                    <!-- <label for="password2">Confirme password</label> -->
                    <input id="pass2" name="password2" type="password" placeholder="Confirmer votre password">
                    <?php if(isset($errors['password2'])){ ?>
                    <small style="color: red"> <?=$errors['password2'];?></small>
                    <?php } ?> 
                </div>
                <div class="element">
                    <small>Avatar</small>
                    <a href="#">Choisir un fichier</a>
                </div>
                <input type="submit" class="button"  name="inscription" value="inscription" id="btn">
            </form>
            <div class="avatar">
                
                    <img src="img/userperso.jpg" alt="">

            </div>
        </div>
    </div>
 <script src="<?=PATH_PUBLIC."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>
    
