<?php

use app\models\Pais;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AutorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Autor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombres',
            'slug',
            //'pais_id',
            [
                'attribute' => 'pais_id',
                'filter'    => Select2::widget([
                    'attribute' => 'pais_id',
                    'model'     => $searchModel,
                    'data' => ArrayHelper::map(Pais::find()->all(), 'id', 'pais'),
                    'options' => [
                        //'multiple'      => true,
                        'placeholder' => 'Seleccione un país ...'
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]),
                'format'    => 'raw',
                'value'     => 'pais.pais',
            ],
            'created_by',
            'created_at',
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
