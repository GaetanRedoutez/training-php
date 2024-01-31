<?php
$title = 'Ajouter un article';
ob_start();
?>

<form action="index.php?page=user&redirect=add-item" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>
      <h1>Ajoutez votre article !</h1>
    </legend>

    <label for="name" id="name">Nom</label>
    <input type="text" name="name" id="name" size="30" maxlength="30" required>

    <label for="price" id="price">Prix (€)</label>
    <input type="text" name="price" id="price" size="30" maxlength="3" required>

    <label for="category" id="category">Catégorie</label>
    <select name="category" id="category" size="1" required>
      <option value="">Choisissez une catégorie</option>
      <option value="Ordinateur">Ordinateur</option>
      <option value="Télévision">Télévision</option>
      <option value="Livre">Livre</option>
      <option value="Téléphone">Téléphone</option>
      <option value="Divers">Divers</option>
    </select>

    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <label for="image" id="image">Image</label>
    <input type="file" name="image" id="image">

    <input type="submit" name="add-item" value="Ajouter">
  </fieldset>
</form>


<?php $content = ob_get_clean();
require('./view/template/layout.php');
