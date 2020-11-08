<?php

namespace app\controllers;

use app\models\Pais;
use yii\web\Controller;
use Yii;

class PaisController extends Controller
{
    public function actionListar()
    {
        $model = Pais::find()->select(['id', 'pais'])->all();

        return $this->render(
            "listar", [
                "model" => $model,
            ]
        );
    }

    public function actionConsultas()
    {
        $connection = Yii::$app->db;
//        $query = $connection->createCommand("select * from pais");
        
//        $rows = $query->queryAll();
//        $rows = $query->queryOne();
//        $rows = $query->queryColumn();

//        $query = $connection->createCommand("select count(*) from pais");
//        $rows = $query->queryScalar();

//        $rows = $connection->createCommand("select * from pais where id = :id")
//                ->bindValue(":id", 3)
//                ->queryOne();
        
        $params = [":id" => 2, ":user" => 1];
        $rows = $connection->createCommand(
            "select * from pais where id > :id and created_by = :user"
        )->bindValues($params)->queryAll();

        echo '<pre>';
        print_r($rows);
    }
}