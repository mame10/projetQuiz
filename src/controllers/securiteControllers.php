<?php
include_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "userModel.php");
/**
 * Traitement des Requetes POST
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'connexion') {

            $login = $_POST['login'];
            $password = $_POST['password'];

            connexion($login, $password);
        }
        if ($_POST['action'] == 'inscription') {
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $role = ' ROLE_JOUEUR';
            $score = 0;
            ajoutIformations($prenom, $nom, $login, $password, $password2);
        }
    }
}
/**
 * Traitement des Requetes GET
 */
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == 'connexion') {
            // require_once(PATH_VIEWS ."users/accueil.html.php");
            require_once(PATH_VIEWS . "securite/connexion.html.php");
        } elseif ($_REQUEST['action'] == 'accueil') {
            require_once(PATH_VIEWS . "users/accueil.html.php");
        } elseif ($_REQUEST['action'] == 'liste.joueur') {
            require_once(PATH_VIEWS . "users/accueil.html.php");
        } elseif ($_REQUEST['action'] == 'inscription') {
            require_once(PATH_VIEWS . "users/inscription.html.php");
        } elseif ($_REQUEST['action'] == 'deconnexion') {
            logout();
            require_once(PATH_VIEWS . "securite/connexion.html.php");
        } else {
            require_once(PATH_VIEWS . "securite/connexion.html.php");
        }
    } else {
        require_once(PATH_VIEWS . "securite/connexion.html.php");
    }
}

function connexion(string $login, string $password): void
{
    $errors = [];
    champ_obligatoire("login", $login, $errors);
    if (isset($errors['login'])) {
        valid_email("login", $login, $errors);
        $_SESSION[KEY_ERROR] = $login;
    }

    champ_obligatoire("password", $password, $errors);
    // if (!isset($errors['password'])) {

    //valid_password("password",$password,$errors);

    // }

    if (count($errors) == 0) {
        $userConnect = find_user_login_password($login, $password);
        if (count($userConnect) != 0) {
            $_SESSION[USER_KEY] = $userConnect;
            header("location:" . PATH_PUBLIC . "?controller=user&action=accueil");
            exit();
        } else {
            $errors['connexion'] = "Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERROR] = $errors;
            header("location:" . WEBROOT);
            exit();
        }
    } else {
        $_SESSION[KEY_ERROR] = $errors;
        header("location:" . WEBROOT);
        exit();
    }
}

function logout(): void
{
    $_SESSION[KEY_USER] = array();
    unset($_SESSION[KEY_USER]);
    session_destroy();
    header("location:" . PATH_PUBLIC);
    exit();
}
function loginExiste(string $login)
{
    $users = find_data("users");
    foreach ($users as $user) {
        if ($user['login'] == $login) {
            return true;
        }
    }
}

//ajout infos au fichier json
function ajoutIformations($prenom, $nom, $login, $password, $password2)
{
    $tab = [];
    $errors = [];
    champ_obligatoire("nom", $nom, $errors, "champ obligatoire");
    champ_obligatoire("prenom", $prenom, $errors, "champ obligatoire");
    champ_obligatoire("login", $login, $errors, "champ obligatoire");
    champ_obligatoire("password", $password, $errors, "champ obligatoire");
    champ_obligatoire("password2", $password2, $errors, "champ obligatoire");

    if (loginExiste($login)) {
        $errors['existe'] = "login existe";
    }

    (valid_email('login', $login, $errors));
    // (valid_password('password', $password, $errors, $message = "password invalid"));


    if ($password != $password2) {
        $errors['password2'] = "password no conforme";
    }

    if (count($errors) == 0) {
        $score = 0;
        $role = "ROLE_JOUEUR";
        $tab = [
            "prenom" => $_POST['prenom'],
            "nom" => $_POST['nom'],
            "login" => $_POST['login'],
            "password" => $_POST['password'],
            "password2" => $_POST['password2'],
            "score" => $score,
            "role" => $role
        ];

        $dataJson = file_get_contents(PATH_DB);
        $arrayJson = json_decode($dataJson, true);
        $arrayJson['users'][] = $tab;
        $arr_js = json_encode( $arrayJson);
        file_put_contents(PATH_DB, $arr_js);
        require_once(PATH_VIEWS . "securite".DIRECTORY_SEPARATOR."connexion.html.php");
    } 
    else
     {
        $_SESSION[KEY_ERROR] = $errors;
        require_once(PATH_VIEWS . "users".DIRECTORY_SEPARATOR."inscription.html.php");
        exit();
    }
}
