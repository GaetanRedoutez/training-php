<?php

function dbConnection()
{
  try {
    $dbPDO = new PDO('mysql:host=localhost;dbname=training-php', 'root', '');

    $dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbPDO;
  } catch (PDOException $e) {
    echo "Echec de connexion à la base de données : " . $e->getMessage();
    return null;
  }
}
