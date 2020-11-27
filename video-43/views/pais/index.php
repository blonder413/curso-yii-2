<?php

//use kartik\alert\AlertBlock;
use kartik\growl\Growl;
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pais-index">

    <?php
    /*
    echo AlertBlock::widget([
        'type' => AlertBlock::TYPE_ALERT,
        'useSessionFlash' => true,
        'delay'             => 5000,
    ]);*/
    if (Yii::$app->session->getFlash("success")) {
        echo Growl::widget([
            'type' => Growl::TYPE_SUCCESS,
            'title' => 'Registro guardado!',
            'icon' => 'glyphicon glyphicon-ok-sign',
            'body' => Yii::$app->session->getFlash("success"),
            'showSeparator' => true,
            'delay' => 0,
            'pluginOptions' => [
                'showProgressbar' => false,
                'placement' => [
                    'from' => 'top',
                    'align' => 'center',
                ],
                'timer' => 3000,
            ]
        ]);
    } elseif (Yii::$app->session->getFlash("error")) {
        echo Growl::widget([
            'type' => Growl::TYPE_DANGER,
            'title' => 'Error!',
            'icon' => 'glyphicon glyphicon-remove-sign',
            'body' => Yii::$app->session->getFlash("success"),
            'showSeparator' => true,
            'delay' => 4500,
            'pluginOptions' => [
                'showProgressbar' => false,
                'placement' => [
                    'from' => 'top',
                    'align' => 'right',
                ],
                'timer' => 3000,
            ]
        ]);
    }
    ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pais', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pais',
            'slug',
            //'created_by',
            //'createdBy.username',
            [
                'attribute' => 'created_by',
                'format'    => 'raw', // text, email, url
                //'label'     => 'Usuario que crea',
                'value' => 'createdBy.username',
            ],
            //'created_at',
            //'created_at:datetime',
            [
                'attribute' => 'created_at',
                'filter'    => DatePicker::widget([
                    'model' => $searchModel,
                    //'name'  => 'created_at',
                    'attribute' => 'created_at',
                    'language'  => 'es',
                    //'template' => '{addon}{input}',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                        ]
                ]),
                'value'     => 'created_at',
                'format'    => 'raw',
            ],
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
