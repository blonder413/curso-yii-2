<?php

use app\models\Departamento;
use app\models\Municipio;
use app\models\Persona;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departamento')->dropDownList(
        ArrayHelper::map(Departamento::find()->all(), 'id', 'departamento'),
        [
            'prompt'    => 'Seleccione...',
            'onchange'  => '
                $.post("index.php?r=departamento/get-municipios&id=' . '" + $(this).val(), function(data){
                    $("select#persona-municipio_id").html(data);
                })
            '
        ]
    ) ?>

    <?= $form->field($model, 'municipio_id')->dropDownList(
        //ArrayHelper::map(Municipio::find()->all(), 'id', 'municipio'),
        [],
        [
            'prompt'    => 'Seleccione...',
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
