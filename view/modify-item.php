<?php
$title = 'Ajouter un article';
ob_start();
print_r($_SESSION['item']);
?>

<form action="index.php?page=user&redirect=modify-item" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>
      <h1>Modifier votre article !</h1>
    </legend>

    <label for="name" id="name">Nom</label>
    <input type="text" name="name" id="name" size="30" maxlength="30" value="<?= $_SESSION['item']['item_name'] ?>" required>

    <label for="price" id="price">Prix (€)</label>
    <input type="text" name="price" id="price" size="30" maxlength="3" value="<?= $_SESSION['item']['item_price'] ?>" required>

    <label for="category" id="category">Catégorie</label>
    <select name="category" id="category" size="1" required>
      <option value="">Choisissez une catégorie</option>
      <option value="Ordinateur" <?php echo ($_SESSION['item']['item_category'] === 'Ordinateur') ? 'selected' : ''; ?>>Ordinateur</option>
      <option value="Télévision" <?php echo ($_SESSION['item']['item_category'] === 'Télévision') ? 'selected' : ''; ?>>Télévision</option>
      <option value="Livre" <?php echo ($_SESSION['item']['item_category'] === 'Livre') ? 'selected' : ''; ?>>Livre</option>
      <option value="Téléphone" <?php echo ($_SESSION['item']['item_category'] === 'Téléphone') ? 'selected' : ''; ?>>Téléphone</option>
      <option value="Divers" <?php echo ($_SESSION['item']['item_category'] === 'Divers') ? 'selected' : ''; ?>>Divers</option>
    </select>

    <input type="submit" name="modifiy-item" value="Modifier">
    <input type="submit" name="delete-item" value="Supprimer">
  </fieldset>
</form>


<?php $content = ob_get_clean();
require('./view/template/layout.php');
