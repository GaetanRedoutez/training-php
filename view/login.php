<?php
$title = 'Connexion';
ob_start();
?>

<form action="index.php?page=login" method="post" rel="login-form">
  <fieldset>
    <legend>
      <h1>Connectez vous</h1>
    </legend>
    <label for="mail">Email</label>
    <input type="email" id="email" name="email" placeholder="Type your mail here" size="50" maxlength="50">
    <label for="pwd">Mot de passe </label>
    <input type="password" id="password" name="password" placeholder="Type your password here" size="50" maxlength="50">
    <input type="submit" name="connect" value="Se connecter">
  </fieldset>
</form>

<a href="index.php?page=signup">Créer un compte</a>


<?php $content = ob_get_clean();
require('./view/template/layout.php');
