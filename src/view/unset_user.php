<?php $title = 'Ma page membre';
ob_start();

echo "<h1>Veuillez vous connectez pour accéder à cette page 😭</h1>";

$content = ob_get_clean();
require('./View/template/layout.php');
