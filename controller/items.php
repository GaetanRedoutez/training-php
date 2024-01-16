<?php
require_once('./model/getItems.php');

function items()
{
  require('./view/items.php');
  $items = getItems();

  echo '<div class="user-item-grid">';
  foreach ($items as $item) {
    $basePath = "C:/XAMPP/htdocs/training-php/";
    $image = str_replace($basePath, '', $item['item_image']);

    echo '<div class="item">';
    echo '<h3>' . $item['item_name'] . '</h3>';
    echo '<p><b>Catégorie: ' . $item['item_category'] . '</b></p>';
    echo '<p>' . $item['item_price'] . '€</p>';
    echo '<p>Vendu par ' . $item['user_name'] . '</p>';
    echo '<img src="' . $image . '" alt="' . $item['item_name'] . '">';
    echo '</div>';
  }
  echo '</div>';
}
