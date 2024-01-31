<?php $title = 'Ma page membre';
ob_start();

$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$user_lname = isset($_SESSION['user_lname']) ? $_SESSION['user_lname'] : '';
// $user_items = isset($_SESSION['user_items']) ? $_SESSION['user_items'] : '';

?>
<div class="row text-center">
  <?= "<h1>Bienvenue " . $user_name . " " . $user_lname . " 🫅</h1>" ?>
</div>


<h2 class="border-bottom">Mes articles</h2>
<a href="index.php?page=user&redirect=add-item" class="btn btn-primary">Vendre un article ! 💲</a>

<?php

$content = ob_get_clean();
require('./View/template/layout.php');
