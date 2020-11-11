<?php
namespace app\models;

use app\models\Libro;
use yii\db\ActiveRecord;

class Editorial extends ActiveRecord {
    public static function tableName()
    {
        return "editorial";
    }

    public static function primaryKey()
    {
        return ["id"];
    }

    public function getLibros()
    {
        return $this->hasMany(Libro::class, ['editorial_id' => 'id'])->orderBy('id desc');
    }
}