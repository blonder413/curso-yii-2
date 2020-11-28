<?php
namespace app\models;

use app\models\Libro;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Editorial extends ActiveRecord {
    public static function tableName()
    {
        return "editorial";
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['editorial'], 'required'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_by', 'created_at', 'udpated_by', 'updated_at'], 'safe'],
            [['editorial', 'slug'], 'string', 'max' => 100],
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::class,
                'createdByAttribute'    => 'created_by',
                'updatedByAttribute'    => 'updated_by',
            ],
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'editorial',
                //'slugAttribute' => 'slug',
            ]
            ];
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