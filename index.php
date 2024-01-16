<?php
require_once('./controller/home.php');
require_once('./controller/user.php');
require_once('./controller/add-item.php');
require_once('./controller/modify-item.php');
require_once('./controller/login.php');
require_once('./controller/signup.php');
require_once('./controller/items.php');
require_once('./controller/disconnect.php');

if (isset($_GET['page']) && $_GET['page'] != '') {
  if ($_GET['page'] === 'items') {
    items();
  } elseif ($_GET['page'] === 'user') {
    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
      if ($_GET['redirect'] === 'add-item') {
        addItem();
      } elseif ($_GET['redirect'] === 'modify-item') {
        modify();
      }
    } else {
      user();
    }
  } elseif ($_GET['page'] === 'signup') {
    signup();
  } elseif ($_GET['page'] === 'login') {
    login();
  }
} elseif (isset($_GET['action']) && $_GET['action'] != '') {
  if ($_GET['action'] === 'disconnect') {
    disconnect();
  }
} else {
  home();
}
echo "<br> session_status : ";
var_dump(session_status());
echo "<br> session_id : ";
var_dump(session_id());
echo "<br> session_name : ";
var_dump(session_name());
