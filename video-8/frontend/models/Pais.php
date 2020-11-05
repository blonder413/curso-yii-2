<?php
namespace frontend\models;
use yii\db\ActiveRecord;

class Pais extends ActiveRecord {
    public static function tableName()
    {
        return "pais";
    }

    public static function primaryKey()
    {
        return ["id"];
    }
}