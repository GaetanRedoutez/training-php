<?php
require_once('./model/getUserItem.php');
require_once('./model/displayItem.php');

function user()
{
  session_start();
  if (isset($_SESSION['user_name']) && isset($_SESSION['user_lname'])) {
    require('./view/user.php');
    $items = getUserItem($_SESSION['user_id']);

    echo '<div class="user-item-grid">';
    foreach ($items as $item) {
      displayItem($item, true);
    }
    echo '</div>';
  } else {
    require('./view/unset_user.php');
    session_destroy();
  }
}
