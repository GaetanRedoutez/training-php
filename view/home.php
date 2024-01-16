<?php $title = 'Training PHP';
ob_start();
?>

<h1>💻Training PHP💻</h1>
<p>Ce site à pour but de s'entrainer en PHP </p>
<p>On y retrouvera :
<ul>
  <li>Une page avec des articles</li>
  <li>Un espace membre qui permettre d'ajouter ces articles</li>
  <li>Un panier d'achat</li>
  <li></li>
</ul>
</p>

<?php $content = ob_get_clean();
require('./view/template/layout.php');
