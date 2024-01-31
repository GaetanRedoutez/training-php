<?php
require_once('dbConnection.php');

function deleteItem($itemId, $userId)
{
  $db = dbConnection();

  $req = $db->prepare('DELETE FROM items WHERE user_id = :user_id AND item_id = :item_id;');

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
