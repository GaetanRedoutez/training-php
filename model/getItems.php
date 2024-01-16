<?php
require_once('./model/dbConnection.php');

function getItems()
{
  $db = dbConnection();

  $req = $db->prepare('SELECT * FROM items');
  $req->execute();

  return  $req->fetchAll();
}
