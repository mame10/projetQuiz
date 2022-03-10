<?php
/*chemin sur dossier racine du projet */
define("ROOT", str_replace("public" . DIRECTORY_SEPARATOR . "index.php", "", $_SERVER['SCRIPT_FILENAME']));

//chemin sur dossier src qui contient les controllers
define("PATH_SRC", ROOT . "src" . DIRECTORY_SEPARATOR);

//chemin sur dossier templates du projet
define("PATH_VIEWS", ROOT . "templates" . DIRECTORY_SEPARATOR);

//chemin sur data qui contient le fichier Json db.json
define("PATH_DB", ROOT . "data" . DIRECTORY_SEPARATOR . "db.json");

//chemin sur le dossier public, pour inclusion des images, css et js
define("PATH_PUBLIC", str_replace("index.php", "", $_SERVER['SCRIPT_NAME']));

define("PATH_UPLOADS", ROOT . "public" . DIRECTORY_SEPARATOR."uploads". DIRECTORY_SEPARATOR);




//Requete GET  et POST
define("WEBROOT", "http://localhost:3002/");

define('KEY_ERROR', 'errors');
define('KEY_USER', 'connect_user');
