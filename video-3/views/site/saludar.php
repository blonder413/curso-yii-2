hola <?= $nombre ?>

<?php
foreach ($datos as $key => $value) {
    echo $value . '<br>';
}
?>

<?= $this->render("_footer"); ?>