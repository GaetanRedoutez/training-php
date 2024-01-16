<?php
$title = 'Créer un compte';
ob_start();
?>

<form action="index.php?page=signup" method="post" rel="signup-form">
  <fieldset>
    <legend>
      <h1>Créer votre compte !</h1>
    </legend>
    <label for="name">Prénom</label>
    <input type="text" id="name" name="name" placeholder="Type your first name here" size="30" maxlength="30" required>
    <label for="lname">Nom</label>
    <input type="text" id="lname" name="lname" placeholder="Type your last name here" size="30" maxlength="30" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Type your mail here" size="50" maxlength="50" required>
    <label for="pwd">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Type your password here" size="50" maxlength="50" required>
    <input type="submit" name="signup" value="Créer mon compte">
  </fieldset>
</form>


<?php $content = ob_get_clean();
require('./view/template/layout.php');
