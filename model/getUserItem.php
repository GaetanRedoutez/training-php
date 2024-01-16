<?php
require_once('./model/dbConnection.php');

function getUserItem($userId)
{
  $db = dbConnection();

  $req = $db->prepare('SELECT * FROM items WHERE user_id = :user_id');
  $req->bindValue(':user_id', $userId);
  $res = $req->execute();

  return  $req->fetchAll();
}
