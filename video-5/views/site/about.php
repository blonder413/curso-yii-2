<?php
use yii\helpers\Html;
?>


<?= Html::img(
    '@web/img/logo.png',
    [
        'alt'   => 'Mi logo',
        'width'  => '100'
    ]
) ?>

<?= Html::a(
    'Perfil',
    [
        'user/ver', 
        'id'    => 413
    ],
    [
        'class' => 'btn btn-success',
    ]
) ?>

<?= Html::a(
    'Mi web',
    'https://blonder413.wordpress.com/',
    [
        'class'     => 'btn btn-primary',
        'target'    => '_blank',
    ]
) ?>

<hr>

<?= Html::a(
    Html::img(
        '@web/img/logo.png',
        [
            'width'  => 200,
            'alt'   => 'Mi perfil',
        ]
    ),
    'https://blonder413.wordpress.com/',
    [
        'title'     => 'Mi web',
    ]
) ?>