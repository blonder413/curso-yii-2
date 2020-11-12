<?php
namespace app\models;

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

    public function rules()
    {
        return [
            [['pais', 'slug'], 'required'],
            [['pais'], 'unique', 'message' => 'Ya se ha registrado  este país, por favor elija otro'],
            [['pais', 'slug'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['pais', 'slug'], 'string', 'max' => 155],
            /*
            [
                ['pais'], function($attribute, $params) {
                    if ($this->$attribute != "Colombia") {
                        $this->addError($attribute, "Este país no está permitido");
                    }
                }
            ],
            */
            [['pais'], 'paispermitido'],
        ];
    }

    /*
    public function paispermitido()
    {
        if ($this->pais != "Colombia") {
            $this->addError("pais", "Este país no está permitido!");
        }
    }
    */

    public function paispermitido($attribute, $params)
    {
        if ($this->$attribute != "Colombia") {
            $this->addError($attribute, "Este país no está permitido!!");
        }
    }
}