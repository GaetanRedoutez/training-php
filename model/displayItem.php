<?php
function displayItem($item)
{
  $basePath = "C:/XAMPP/htdocs/training-php/";
  $image = str_replace($basePath, '', $item['item_image']);

  echo '<div class="item">';
  echo '<h3>' . $item['item_name'] . '</h3>';
  echo '<p><b>Catégorie: ' . $item['item_category'] . '</b></p>';
  echo '<p>' . $item['item_price'] . '€</p>';
  echo '<img src="' . $image . '" alt="' . $item['item_name'] . '">';
  echo '<button><a href="index.php?page=user&redirect=modify-item&id=' . $item['item_id'] . '">Modifier</a></button>';
  echo '</div>';
}
