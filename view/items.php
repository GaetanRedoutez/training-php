<?php $title = 'Page article';
ob_start();
?>

<h1>🎮Page article🎮</h1>
<p>Ici nous avons tous nos articles </p>

<?php $content = ob_get_clean();
require('./view/template/layout.php');
