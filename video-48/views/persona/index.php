<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Persona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'caption'   => 'Listado de personas',
        'captionOptions'    => ['class' => 'text-center'],
        'emptyCell' => 'NULL',
        'emptyText' => 'No existen datos',
        'emptyTextOptions'  => ['class' => 'alert alert-danger'],
        'filterErrorOptions'    => ['class' => 'alert alert-danger'],
        'headerRowOptions' => ['class' => 'success'],
        'filterPosition'    => GridView::FILTER_POS_HEADER,
        'layout'    => "{pager}\n{summary}\n{items}\n{pager}",
        'showOnEmpty'   => false,
        'tableOptions'  => [
            'class' => 'table table-striped table-bordered table-hover table-condensed'
        ],
        'rowOptions'    => function($model){
            if ($model->municipio_id == 1) {
                return ['class' => 'danger'];
            } elseif ($model->municipio_id == 2) {
                return ['class' => 'info'];
            }
        },
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'municipio_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
