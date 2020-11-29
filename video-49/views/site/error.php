<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= $this->title ?></h1>

    <?php if ($exception->statusCode == 404): ?>
    
        <?= $this->render("_404", ["message" => $message]); ?>
    
    <?php elseif ($exception->statusCode == 403): ?>
    
        <?= $this->render("_404", ["message" => $message]); ?>
    
    <?php elseif ($exception->statusCode == 405): ?>
    
        <?= $this->render("_405", ["message" => $message]); ?>
    
    <?php else: ?>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Ha ocurrido un error
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

    <?php endif; ?>

</div>
