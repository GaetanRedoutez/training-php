<?php
require('./model/getOneItem.php');
require('./model/modifyItem.php');
require('./model/deleteItem.php');

function modify()
{
  session_start();

  if (isset($_SESSION['user_id'])) {

    require('./view/modify-item.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {
      $_SESSION['item'] = getOneItem($_GET['id'], $_SESSION['user_id']);
      echo '<div class="user-item-grid">';
      displayItem($_SESSION['item']);
      echo '</div>';
      if (isset($_POST['modify-item']) && !empty($_POST['modify-item'])) {
        modifyItem($_GET['id'], $_SESSION['user_id']);
      } elseif (isset($_POST['delete-item']) && !empty($_POST['delete-item'])) {
        deleteItem($_GET['id'], $_SESSION['user_id']);
      }
    }
  } else {
    require('./view/unset_user.php');
  }
}
