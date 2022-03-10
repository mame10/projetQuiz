<?php
// require_once(PATH_PUBLIC."include".DIRECTORY_SEPARATOR."header.inc.html.php");
if (isset($_SESSION[KEY_ERROR])) {
    $errors = $_SESSION[KEY_ERROR];
    unset($_SESSION[KEY_ERROR]);
}

function vers(string $ctr, string $action)
{
    echo "<input type='hidden' name='controller' value='$ctr'>
         <input type='hidden' name='action' value='$action'>";
}
if (!is_connect()) {
    require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header1.html.php");
}
    require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.html.php")

?>

<div class="main-inscr">
    <div class="container-inscr">
        <form action="<?= WEBROOT ?>" method="POST" class="form-inscr" id="form" enctype="multipart/form-data">
            <h5 class="h5-inscr">S'inscrire</h5>
            <?php if (isset($errors['connexion'])) { ?>
                <p style="color: red"> <?= $errors['connexion']; ?> </p>
            <?php } ?>
            <?php if(is_admin()) {?>    
                <small class="gray-inscr">Pour tester votre niveau de culture generale</small>
            <?php } ?>
                <small class="gray-inscr">Pour proposer des Quiz</small>
            <?php vers("securite", "inscription") ?>

            <div class="form-control-inscr" id="second">
                <!-- <label for="username">Prenom</label> -->
                <input id="second_name" name="prenom" type="text" placeholder="Entrer votre prenom">
                <?php if (isset($errors['prenom'])) { ?>
                    <small style="color: red"> <?= $errors['prenom']; ?></small>
                <?php } ?>
            </div>
            <div class="form-control-inscr" id="first_name">
                <!-- <label for="username">Nom</label> -->
                <input id="username" name="nom" type="text" placeholder="Entrer votre nom">
                <?php if (isset($errors['nom'])) { ?>
                    <small style="color: red"> <?= $errors['nom']; ?></small>
                <?php } ?>
            </div>
            <div class="form-control-inscr" id="log">
                <!-- <label for="email">Login</label> -->
                <input id="email" name="login" type="text" placeholder="Entrer votre login">
                <?php if (isset($errors['existe'])) { ?>
                    <small style="color: red"> <?= $errors['existe']; ?></small>
                <?php } ?>
            </div>
            <div class="form-control-inscr" id="password">
                <!-- <label for="password">Password</label> -->
                <input id="pass1" name="password" type="password" placeholder="Entrer votre password">
                <?php if (isset($errors['password'])) { ?>
                    <small style="color: red"> <?= $errors['password']; ?></small>
                <?php } ?>
            </div>
            <div class="form-control-inscr" id="password2">
                <!-- <label for="password2">Confirme password</label> -->
                <input id="pass2" name="password2" type="password" placeholder="Confirmer votre password">
                <?php if (isset($errors['password2'])) { ?>
                    <small style="color: red"> <?= $errors['password2']; ?></small>
                <?php } ?>
            </div>
            <div class="element-inscr">
                <input type="file" name="photo" id="image">
                <!-- <a href="#">Choisir un fichier</a> -->
            </div>
                <input type="submit" class="button" name="inscription" value="inscription" id="btn">
                <!-- <button>submit</button> -->
        </form>
        <div class="avatar-inscr" name="photo">
            <label for="image">
                 <img src="img/userperso.jpg" alt="">
            </label>
        </div>
    </div>
</div>

<script src="<?= PATH_PUBLIC . "js" . DIRECTORY_SEPARATOR . "inscription.js" ?>"></script>

<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "footer.html.php");
