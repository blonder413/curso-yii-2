<?php
namespace app\models;

use app\models\Editorial;
use yii\db\ActiveRecord;

class Libro extends ActiveRecord {
    public static function tableName()
    {
        return "libro";
    }

    public static function primaryKey()
    {
        return ["id"];
    }


    public function getEditorial()
    {
        return $this->hasOne(Editorial::class, ['id' => 'editorial_id']);
    }

    public function getTituloPersonalizado()
    {
        return "mi libro se llama $this->titulo";
    }

    public function getLibroEditorial()
    {
        return $this->titulo . " - " . $this->editorial->editorial;
    }
}