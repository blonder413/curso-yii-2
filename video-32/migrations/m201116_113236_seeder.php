<?php

use yii\db\Expression;
use yii\db\Migration;
use Faker\Factory;

/**
 * Class m201116_113236_seeder
 */
class m201116_113236_seeder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $faker = Factory::create("es_CO");

        $this->insert('user', [
            'username'      => 'admin',
            'password_hash' => \Yii::$app->security->generatePasswordHash('admin'),
            'auth_key'      => \Yii::$app->security->generateRandomString(),
            'email'         => 'admin@blonder413.com',
            'status'        => 10,
            'created_at'    => 1,
            'updated_at'    => 1
        ]);

        for ($i = 0; $i < 50; $i++) {
            $this->insert('pais', [
                'pais'  => $faker->country,
                'slug'  => $faker->slug,
                'created_by'    => 1,
                'created_at'    => new Expression('NOW()'),
                'updated_by'    => 1,
                'updated_at'    => new Expression('NOW()'),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201116_113236_seeder cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201116_113236_seeder cannot be reverted.\n";

        return false;
    }
    */
}
