<?php
require_once('dbConnection.php');

function modifyItem($itemId, $userId)
{
  $db = dbConnection();

  $item_name = $_POST['name'];
  $item_price = $_POST['price'];
  $item_category = $_POST['category'];

  $req = $db->prepare('UPDATE items
  SET item_name = :item_name, item_price = :item_price, item_category = :item_category
  WHERE user_id = :user_id AND item_id = :item_id;
  ');

  $req->bindValue(':item_name', $item_name);
  $req->bindValue(':item_price', $item_price);
  $req->bindValue(':item_category', $item_category);
  $req->bindValue(':user_id', $userId);
  $req->bindValue(':item_id', $itemId);

  try {
    $res = $req->execute();
    header('location: index.php?page=user');
    exit();
  } catch (PDOException $e) {
    echo "Erreur PDO: " . $e->getMessage();
    return false;
  }
  return $res;
}
