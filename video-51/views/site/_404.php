<?php
use yii\helpers\Html;
?>

<?= Html::img(
    '@web/img/404.png',
    [
        'alt'   => 'Página no encontrada'
    ]
) ?>

<p><?= $message; ?></p>