<?php
namespace app\models;

use yii\db\ActiveRecord;

class LibroMySQL extends ActiveRecord{
    public static function tableName()
    {
        return "libro";
    }
}