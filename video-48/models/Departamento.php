<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property int $id
 * @property string $departamento
 *
 * @property Municipio[] $municipios
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departamento'], 'required'],
            [['departamento'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'departamento' => 'Departamento',
        ];
    }

    /**
     * Gets query for [[Municipios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipios()
    {
        return $this->hasMany(Municipio::className(), ['departamento_id' => 'id']);
    }
}
