<?php
require_once('./model/dbConnection.php');

function getOneItem($itemId, $userId)
{
  $db = dbConnection();

  $req = $db->prepare('SELECT * FROM items WHERE user_id = :user_id && item_id = :item_id');
  $req->bindValue(':user_id', $userId);
  $req->bindValue(':item_id', $itemId);
  $res = $req->execute();

  $req->setFetchMode(PDO::FETCH_ASSOC);

  return  $req->fetch();
}
