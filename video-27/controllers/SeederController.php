<?php
namespace app\controllers;

use app\models\Autor;
use app\models\Pais;
use app\models\User;
use yii\db\Expression;
use yii\web\Controller;

class SeederController extends Controller {
    public function actionAutor()
    {
        $faker = \Faker\Factory::create('es_CO');
        
        for($i=0; $i<50; $i++) {
            //$user = User::find()->orderBy('rand()')->one();   para MySQL
            $user = User::find()->orderBy('random()')->one();

            $pais = Pais::find()->orderBy('random()')->one();

            $autor = new Autor;
            $autor->nombres     = $faker->name;
            $autor->apellidos   = $faker->lastName;
            $autor->slug        = $faker->slug;
            $autor->pais_id     = $pais->id;
            $autor->created_by  = $user->id;
            $autor->created_at  = new Expression('NOW()');
            $autor->updated_by  = $user->id;
            $autor->updated_at  = new Expression('NOW()');
            $autor->insert();
            echo "autor $i insertado<br>";
        }
    }
}