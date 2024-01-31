<?php $title = 'Training PHP';
ob_start();
?>

<div>
  <div class="row text-center">
    <h1 class="col p-3 border-bottom">💻Training PHP💻</h1>
  </div>
  <div class="row">
    <div class="col border-end">
      <p>Ce site à pour but de s'entrainer en PHP et comprends</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Une page avec des articles</li>
        <li class="list-group-item">Une page de connexion</li>
        <li class="list-group-item">Une page de création de compte</li>
        <li class="list-group-item">Un espace membre qui permettre d'ajouter ces articles</li>
        <li class="list-group-item">Un panier d'achat</li>
      </ul>
    </div>

    <div class="col">
      <p>Les techniques utilisées seront :</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Une communication avec une base de données SQL</li>
        <li class="list-group-item">Un fonctionnement classique en architecture MVC (V1)</li>
        <li class="list-group-item">Un fonctionnement POO en architecture MVC (V2)</li>
        <li class="list-group-item">Le style du site sera fait avec Bootstrap</li>
      </ul>
      <p>
    </div>
  </div>
  <?php $content = ob_get_clean();
  require('./view/template/layout.php');
