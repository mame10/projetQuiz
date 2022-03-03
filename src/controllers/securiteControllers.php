<?php
include_once(PATH_SRC."models".DIRECTORY_SEPARATOR."userModel.php");
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){
        if($_POST['action']=='connexion'){
            
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
            
        }
      
        }
     }
    /**
    * Traitement des Requetes GET
    */
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(isset($_GET['action'])){
            if($_GET['action']=='connexion'){
             include_once(PATH_VIEWS."users/accueil.html.php"); 
       
             }elseif($_GET['action']=='deconnexion'){
                logout();
             }
             else{
             require_once(PATH_VIEWS."securite/connexion.html.php");
            }
         }else{
            require_once(PATH_VIEWS."securite/connexion.html.php");
     }
}  

function connexion(string $login,string $password):void {
$errors=[];
champ_obligatoire("login",$login,$errors);
if(!isset($errors['login'])){
valid_email("login",$login,$errors);
}

champ_obligatoire("password",$password,$errors);
if(!isset($errors['password'])){

//valid_password("password",$password,$errors);

}

    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
        if(count($userConnect)!=0){
            $_SESSION[USER_KEY]=$userConnect;
            header("location:".PATH_PUBLIC."?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion']="Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERROR]=$errors;
            header("location:".PATH_PUBLIC);
            exit();
        }
    } else{
        $_SESSION[KEY_ERROR]=$errors;
        header("location:".PATH_PUBLIC);
        exit();
    }
}

function logout():void{
    $_SESSION[KEY_USER]=array();
    unset($_SESSION[KEY_USER]);
    session_destroy();
    header("location:".PATH_PUBLIC);
    exit();
}
