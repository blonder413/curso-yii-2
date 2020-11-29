<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property int $id
 * @property string $nombre
 * @property int|null $municipio_id
 *
 * @property Municipio $municipio
 */
class Persona extends \yii\db\ActiveRecord
{
    public $departamento;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['municipio_id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['municipio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Municipio::className(), 'targetAttribute' => ['municipio_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'municipio_id' => 'Municipio ID',
        ];
    }

    /**
     * Gets query for [[Municipio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::className(), ['id' => 'municipio_id']);
    }
}
