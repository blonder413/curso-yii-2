<?php
use yii\helpers\Html;
?>

<?= Html::img(
    '@web/img/405.png',
    [
        'alt'   => 'Método no permitido'
    ]
) ?>

<p><?= $message; ?></p>