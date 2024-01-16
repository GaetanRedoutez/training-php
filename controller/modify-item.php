<?php
require('./model/modifyItem.php');
require('./model/getOneItem.php');

function modify()
{
  session_start();
  if (isset($_SESSION['user_name']) && isset($_SESSION['user_lname'])) {
    require('./view/modify-item.php');
    if (isset($_GET['id']) && $_GET['id'] != '') {
      $_SESSION['item'] = getOneItem($_GET['id'], $_SESSION['user_id']);
      echo '<div class="user-item-grid">';
      displayItem($_SESSION['item']);
      echo '</div>';
    }
    if (isset($_POST['modify-item']) && $_POST['modify-item'] != '') {
      echo 'modify<br>';
      // modifyItem($_SESSION['user_id']);
    }
  } else {
    require('./view/unset_user.php');
    session_destroy();
  }
}
