<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class SaludoWidget extends Widget {

    public $mensaje;

    public function init()
    {
        parent::init();
        if ( $this->mensaje === null ) {
            $this->mensaje = "No existe un mensaje";
        }
    }

    public function run()
    {
        return Html::encode($this->mensaje);
    }
}