<?php
if (isset($_REQUEST['controller'])) {
    // var_dump($_REQUEST);
    switch ($_REQUEST['controller']) {
        case "securite":
            require_once(PATH_SRC . "controllers" . DIRECTORY_SEPARATOR . "securiteControllers.php");
            break;
        case "user":
            require_once(PATH_SRC . "controllers" . DIRECTORY_SEPARATOR . "userControllers.php");
            break;
        default:
            echo "error: choix non defini!!!";
    }
} else {
    require_once(PATH_SRC . "controllers" . DIRECTORY_SEPARATOR . "securiteControllers.php");
}
