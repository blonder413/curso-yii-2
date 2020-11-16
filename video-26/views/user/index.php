<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'verification_token',
            'status',
            //'created_at',
            //'updated_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'template'  => '{view} {update} {delete} {estado}',
                'buttons'   => [
                    /*
                    'update'    => function($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-pencil"></span>',
                            $url,
                            [
                                'title' => 'Actualizar',
                            ]
                        );
                    },
                    */
                    'estado'    => function($url, $model) {
                        if ( $model->status == 10 ) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-remove"></span>',
                                $url,
                                [
                                    'title' => 'Desactivar',
                                ]
                            );
                        } else {
                            return Html::a(
                                '<span class="glyphicon glyphicon-ok"></span>',
                                $url,
                                [
                                    'title' => 'Activar',
                                ]
                            );
                        }
                    }
                ],
                'urlCreator'    => function($action, $model, $key, $index) {
                    if ( $action == 'estado' ) {
                        return Url::to(['user/estado', 'id' => $key]);
                    } elseif ( $action == 'update' ) {
                        return Url::to(['user/update', 'id' => $key]);
                    } elseif ( $action == 'delete' ) {
                        return Url::to(['user/delete', 'id' => $key]);
                    } elseif ( $action == 'view' ) {
                        return Url::to(['user/view', 'id' => $key]);
                    }
                }
            ],
        ],
    ]); ?>


</div>
