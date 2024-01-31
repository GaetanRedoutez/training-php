<?php
require_once('dbConnection.php');

function createAccount()
{
  $db = dbConnection();

  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pwd = $_POST['password'];

  if (!empty($name) && !empty($lname) && !empty($email) && !empty($pwd)) {

    $req_ctrl = $db->prepare('SELECT COUNT(*) FROM users WHERE user_mail = :email');
    $req_ctrl->bindValue(':email', $email);
    $res_ctrl = $req_ctrl->execute();
    $userExists = $req_ctrl->fetchColumn();

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !$userExists) {
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

      $req = $db->prepare('INSERT INTO users(user_name,user_lname,user_mail,user_pwd) VALUES (:name,:lname,:email,:pwd)');
      $req->bindValue(':name', $name);
      $req->bindValue(':lname', $lname);
      $req->bindValue(':email', $email);
      $req->bindValue(':pwd', $hashedPwd);

      $res = $req->execute();

      if ($res) {
        return '<p>Compte crée avec succès ! 😁<a href="index.php?page=login">Se connecter ?</a><p>';
      } else {
        return 'Echec de la création 😭';
      }
    } else {
      return 'Adresse mail invalide';
    }
  } else {
    return 'Veuillez saisir tout les champs';
  }
}
