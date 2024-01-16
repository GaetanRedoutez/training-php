<?php
require_once('dbConnection.php');

function newItem($userId, $userName)
{
  $db = dbConnection();

  $path = "C:/XAMPP/htdocs/training-php/images/";
  move_uploaded_file($_FILES['image']['tmp_name'], $path . $_FILES['image']['name']);

  $_FILES['image']['name'] !== "" ?
    (
      $itemImage = $path . $_FILES['image']['name']
    ) : (
      $itemImage = $path . "empty.jpg"
    );
  $itemName = $_POST['name'];
  $itemPrice = $_POST['price'];
  $itemCategory = $_POST['category'];


  $req = $db->prepare('INSERT INTO items(user_id,user_name, item_name, item_price, item_category, item_image) VALUES(:user_id,:user_name,:item_name,:item_price,:item_category,:item_image)');

  $req->bindValue(':user_id', $userId);
  $req->bindValue(':user_name', $userName);
  $req->bindValue(':item_name', $itemName);
  $req->bindValue(':item_price', $itemPrice);
  $req->bindValue(':item_category', $itemCategory);
  $req->bindValue(':item_image', $itemImage);

  $res = $req->execute();
  if ($res) {
    echo "Article ajouté !😁 ";
  } else {
    echo "Echec de la création";
  }
}
