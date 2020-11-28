<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipio".
 *
 * @property int $id
 * @property string $municipio
 * @property int $departamento_id
 *
 * @property Departamento $departamento
 * @property Persona[] $personas
 */
class Municipio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'municipio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['municipio', 'departamento_id'], 'required'],
            [['departamento_id'], 'integer'],
            [['municipio'], 'string', 'max' => 150],
            [['departamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['departamento_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'municipio' => 'Municipio',
            'departamento_id' => 'Departamento ID',
        ];
    }

    /**
     * Gets query for [[Departamento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'departamento_id']);
    }

    /**
     * Gets query for [[Personas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['municipio_id' => 'id']);
    }
}
