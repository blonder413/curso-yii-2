<?php
use yii\helpers\Html;
?>

<?= Html::img(
    '@web/img/403.png',
    [
        'alt'   => 'No tiene acceso'
    ]
) ?>

<p><?= $message; ?></p>