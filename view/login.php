<?php
$title = 'Connexion';
ob_start();
?>

<form action="index.php?page=login" method="post" rel="login-form">
  <div class="row g-3">
    <div class="row mb-3">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" id="email" placeholder="Type your mail here" class="form-control form-control-sm" data-np-intersection-state="visible">
      </div>
    </div>
    <div class="row mb-3">
      <label for="pwd" class="col-sm-2 col-form-label">Mot de passe </label>
      <div class="col-sm-10">
        <input type="password" id="password" name="password" placeholder="Type your password here" class="form-control form-control-sm" data-np-intersection-state="visible">
      </div>
    </div>
  </div>
  <input type="submit" name="connect" value="Se connecter" class="btn btn-primary">
  <a href="index.php?page=signup" class="btn btn-secondary">Créer un compte</a>
</form>




<?php $content = ob_get_clean();
require('./view/template/layout.php');
