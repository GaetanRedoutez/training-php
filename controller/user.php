<?php
require_once('./model/getUserItem.php');

function user()
{
  session_start();
  if (isset($_SESSION['user_name']) && isset($_SESSION['user_lname'])) {
    require('./view/user.php');
    $userItems = getUserItem($_SESSION['user_id']);

    echo '<div class="user-item-grid">';
    foreach ($userItems as $item) {
      $basePath = "C:/XAMPP/htdocs/training-php/";
      $image = str_replace($basePath, '', $item['item_image']);

      echo '<div class="item">';
      echo '<h3>' . $item['item_name'] . '</h3>';
      echo '<p><b>Catégorie: ' . $item['item_category'] . '</b></p>';
      echo '<p>' . $item['item_price'] . '€</p>';
      echo '<img src="' . $image . '" alt="' . $item['item_name'] . '">';
      echo '</div>';
    }
    echo '</div>';
  } else {
    require('./view/unset_user.php');
    session_destroy();
  }
}
