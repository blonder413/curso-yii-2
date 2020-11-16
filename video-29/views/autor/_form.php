<?php

use app\models\Pais;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Autor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autor-form">

    <?php $form = ActiveForm::begin([
        'id'    => 'autor-form',
        'enableAjaxValidation'  => true,
        'enableClientValidation'    => false,
        'options'   => [
            'enctype'   => 'multipart/form-data',
        ]
    ]); ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'archivo')->fileInput() ?>

    <?= $form->field($model, 'pais_id')->widget(Select2::class, [
        'data' => ArrayHelper::map(Pais::find()->all(), 'id', 'pais'),
        'language'  => 'es',
        'options' => ['placeholder' => 'Seleccione un país ...'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
