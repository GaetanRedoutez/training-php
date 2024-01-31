<?php
$title = 'Créer un compte';
ob_start();
?>


<h1 class="p-4">Créer votre compte !</h1>
<form action="index.php?page=signup" method="post" rel="signup-form">
  <div class="row g-3">
    <div class="row mb-3">
      <label for="name" class="col-sm-2 col-form-label">Prénom</label>
      <div class="col-sm-10">
        <input type="text" id="name" name="name" placeholder="Type your first name here" class="form-control form-control-sm" data-np-intersection-state="visible" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="lname" class="col-sm-2 col-form-label">Nom</label>
      <div class="col-sm-10">
        <input type="text" id="lname" name="lname" placeholder="Type your last name here" class="form-control form-control-sm" data-np-intersection-state="visible" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" id="email" name="email" placeholder="Type your mail here" class="form-control form-control-sm" data-np-intersection-state="visible" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="pwd" class="col-sm-2 col-form-label">Mot de passe</label>
      <div class="col-sm-10">
        <input type="password" id="password" name="password" placeholder="Type your password here" class="form-control form-control-sm" data-np-intersection-state="visible" required>
      </div>
    </div>
  </div>
  <input type="submit" name="signup" value="Créer mon compte" class="btn btn-primary">
</form>


<?php $content = ob_get_clean();
require('./view/template/layout.php');
