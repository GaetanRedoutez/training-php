<?php
require_once('./model/getItems.php');
require_once('./model/displayItem.php');

function items()
{
  require('./view/items.php');
  $items = getItems();

  echo '<div class="user-item-grid">';
  foreach ($items as $item) {
    displayItem($item, false);
  }
  echo '</div>';
}
