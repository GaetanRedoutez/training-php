<?php

require_once('model/createAccount.php');

function signup()
{
  require('./view/signup.php');

  if (isset($_POST['signup']) && $_POST['signup'] != '') {
    $result = createAccount();
    echo $result;
  }
}
