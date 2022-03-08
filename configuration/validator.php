<?php
function champ_obligatoire(
  string $key,
  string $data,
  array &$errors,
  string $message = "ce champ est vide"
): void {
  if (empty($data)) {
    $errors[$key] = $message;
  }
}

// validation email
function valid_email(string $key, string $mail, array &$errors, $message = "email invalid"): void
{
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors[$key] = $message;
  }
}
// validation password
// function valid_password(string $key,string $password,array &$errors,
// string $message="password invalid"){
//         $number = preg_match('@[0-9]@', $password);
//         $uppercase = preg_match('@[A-Z]@', $password);
//         $lowercase = preg_match('@[a-z]@', $password);
//         $specialChars = preg_match('@[^\w]@', $password);

//         if(strlen($password) < 6 || !$number || !$uppercase || !$lowercase || !$specialChars) {
//           $errors[$key] = $message;
//         }
//}
// function valid_password(string $key, string $password, array &$errors, $message = "password invalid"): void
// {
//   $lowercase = preg_match('@[a-z]@', $password);
//   $number = preg_match('@[0-9]@', $password);
//   if (strlen($password) < 6 || !$number || !$lowercase) {
//     $errors[$key] = $message;
//   }
// }

function CheckPassword($passwd) {
  $paw ='/^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,40}+$/' ;
  if(preg_match($paw,$passwd)) {
    return true;
  }else{
    $errors['password']="mot de passe invalide";
  }

}


