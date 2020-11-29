<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $id
 * @property string $categoria
 * @property string $slug
 * @property string $imagen
 * @property string $descripcion
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoria', 'slug', 'imagen', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['categoria', 'slug', 'imagen'], 'string', 'max' => 155],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria' => 'Categoria',
            'slug' => 'Slug',
            'imagen' => 'Imagen',
            'descripcion' => 'Descripcion',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
}
