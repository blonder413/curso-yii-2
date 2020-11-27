<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Editorial */
/* @var $form yii\widgets\ActiveForm */

$this->registerJS(
    '$("document").ready(function(){
        $("#nuevo_editorial").on("pjax:end", function(){
            $.pjax.reload({container:"#editoriales"});
        });
    });'
);

?>

<div class="editorial-form">

<?php PJax::begin(['id' => 'nuevo_editorial']); ?>

    <?php
    foreach(Yii::$app->session->getAllFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
    } 
    ?>

    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>

    <?= $form->field($model, 'editorial')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<?php PJax::end(); ?>

</div>
