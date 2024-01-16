<?php $title = 'Ma page membre';
ob_start();

$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$user_lname = isset($_SESSION['user_lname']) ? $_SESSION['user_lname'] : '';
// $user_items = isset($_SESSION['user_items']) ? $_SESSION['user_items'] : '';

echo "<h1>Bienvenue " . $user_name . " " . $user_lname . " 🫅</h1>";
?>

<h2><a href="index.php?page=user&redirect=add-item">Vendre un article ! 💲</a></h2>

<h2>Mes articles</h2>


<?php

$content = ob_get_clean();
require('./View/template/layout.php');
