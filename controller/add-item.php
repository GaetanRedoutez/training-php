<?php
require('./model/newItem.php');

function addItem()
{
  session_start();
  if (isset($_SESSION['user_name']) && isset($_SESSION['user_lname'])) {
    require('./view/add-item.php');
    if (isset($_POST['add-item']) && $_POST['add-item'] != '') {
      newItem($_SESSION['user_id'], $_SESSION['user_name']);
    }
  } else {
    require('./view/unset_user.php');
    session_destroy();
  }
}
