<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use app\models\Editorial;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EditorialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Editorials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="editorial-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a('Create Editorial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
    <p>
    <?php
    Modal::begin([
        'header'    => '<h2>Crear editorial</h2>',
        'toggleButton'  => ['label' => 'Crear', 'class' => 'btn btn-success'],
    ]);

    echo $this->render('/editorial/create', ['model' => new Editorial()]);

    Modal::end();
    ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php PJax::begin(['id' => 'editoriales']); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'editorial',
            'slug',
            'created_by',
            'created_at',
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php PJax::end(); ?>

</div>
