<?php
include_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "questionModel.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] = "accueil") {
            header("location:" . PATH_PUBLIC . "?controller=securite&action=accueil");
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['action'])) {
        if (!is_connect()) {
            header('location:' . WEBROOT);
            exit();
        } elseif ($_GET['action'] == "accueil") {
            require_once(PATH_VIEWS . "questions" . DIRECTORY_SEPARATOR . "accueil.html.php");

        } elseif ($_GET['action'] == 'liste.question') {
    
            lister_question();
        }
        
    }
}

function lister_question()
{
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS . "users" . DIRECTORY_SEPARATOR . "listeQuestions.html.php");
    $content_for_template = ob_get_clean();
    require_once(PATH_VIEWS . "users" . DIRECTORY_SEPARATOR . "accueil.html.php");
}
