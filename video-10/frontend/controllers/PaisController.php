<?php
namespace frontend\controllers;

use frontend\models\Pais;
use yii\web\Controller;

/**
 * Pais controller
 */
class PaisController extends Controller
{
    public function actionListar()
    {
        //$model = Pais::findOne(2);
        $model = Pais::find()->all();
        //$model = Pais::find()->where("pais = 'Colombia'")->one();
        //$model = Pais::find()->orderBy("pais ASC")->all();
        //$model = Pais::find()->where("created_by = 1")->orderBy("random()")
        //    ->limit(3)->all();
        //$model = Pais::find()->where("created_by = 1")->count();
        /*
        $model = Pais::find()
            ->where("pais = :pais", [":pais" => "Colombia"])
            ->one();
        */
        return $this->render(
            "listar", 
            [
                "model" => $model,
            ]
        );
    }
    //--------------------------------------------------
    public function actionActualizar($id)
    {
        $model = Pais::findOne($id);
        $model->pais = "República de Colombia";
        //$model->update();
        $model->save();
    }
    //--------------------------------------------------
    public function actionEliminar($id)
    {
        $model = Pais::findOne($id);
        $model->delete();

        $model = new Pais;
        //$model->deleteAll("id > 1");
        $model->deleteAll("id > :id", [":id" => 1]);
    }
}