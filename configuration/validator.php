<?php
function champ_obligatoire(string $key,string $data,array &$errors,
string $message="ce champ est vide"):void{
if(empty($data)){
$errors[$key]=$message;
    }
}

// validation email
function valid_email(string $key,string $mail,array &$errors,$message="ce champ est obligatoire"):void{
if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
$errors[$key]=$message;
}
}
// validation password
// function valid_password(string $key,string $password,array &$errors,
// string $message="password invalid"){
//         $number = preg_match('@[0-9]@', $password);
//         $uppercase = preg_match('@[A-Z]@', $password);
//         $lowercase = preg_match('@[a-z]@', $password);
//         $specialChars = preg_match('@[^\w]@', $password);
       
//         if(strlen($password) < 4 || !$number || !$uppercase || !$lowercase || !$specialChars) {
//           $errors[$key] = $message;
//         }
//}
function valid_password(string $key,string $password,array &$errors,$message="password invalid"):void{
  if(!filter_var($password,FILTER_VALIDATE_EMAIL)){
  $errors[$key]=$message;
  }
  }
