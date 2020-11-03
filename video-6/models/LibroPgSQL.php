<?php
namespace app\models;

use yii\db\ActiveRecord;

class LibroPgSQL extends ActiveRecord{
    public static function tableName()
    {
        return "libro";
    }

    public static function getDb()
    {
        return \Yii::$app->dbpgsql;
    }
}