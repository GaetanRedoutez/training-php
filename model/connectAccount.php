<?php
require_once('dbConnection.php');

function connectAccount()
{
  $db = dbConnection();

  $email = $_POST['email'];
  $pwd = $_POST['password'];

  if (!empty($email) && !empty($pwd)) {

    $req = $db->prepare('SELECT * FROM users WHERE user_mail = :email');
    $req->bindValue(':email', $email);
    $res = $req->execute();
    $user = $req->fetch();

    if (!$user) {
      session_destroy();
      echo 'Paire email/mot de passe inconnu';
    } else {
      if ($res) {
        $hashed_pwd = $user['user_pwd'];
        if (password_verify($pwd, $hashed_pwd)) {
          $_SESSION['user_id'] = $user['user_id'];
          $_SESSION['user_name'] = $user['user_name'];
          $_SESSION['user_lname'] = $user['user_lname'];
          return true;
        } else {
          session_destroy();
          echo "Paire email/mot de passe inconnu.";
        }
      } else {
        session_destroy();
        echo "Erreur lors de l'exécution de la requête.";
      }
    }
  } else {
    echo 'Veuillez saisir tout les champs';
  }
}
