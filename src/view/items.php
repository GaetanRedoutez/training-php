<?php $title = 'Page article';
ob_start();
?>

<div class="row text-center">
  <h1 class="col p-3 border-bottom">🎮Article🎮</h1>
</div>

<?php $content = ob_get_clean();
require('./view/template/layout.php');
