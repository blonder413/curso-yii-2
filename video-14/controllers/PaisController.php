<?php

namespace app\controllers;

use app\models\Pais;
use Yii;
use yii\web\Controller;

class PaisController extends Controller
{
    public function actionIndex()
    {
        $pais = new Pais;
        $pais->pais = "Chile";
        $pais->created_by = 1;
        $pais->created_at = date("Y-m-d H:i:s");
        $pais->updated_by = 1;
        $pais->updated_at = date("Y-m-d H:i:s");
        /*
        if ($pais->save()) {
            echo "ok";
        } else {
            print_r($pais->getErrors());
        }
        */
        if ($pais->validate()) {
            echo "ok";
        } else {
            print_r($pais->getErrors());
        }
    }
}