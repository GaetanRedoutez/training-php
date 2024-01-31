<?php

require_once('./model/connectAccount.php');

function login()
{
  require('./view/login.php');

  if (isset($_POST['connect']) && $_POST['connect'] !== '') {
    session_start();
    $connect = connectAccount();
    if (!$connect) {
      echo $connect;
    } else {
      header('location: index.php?page=user');
    }
  }
}
