<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%departamento}}`.
 */
class m201128_202553_create_departamento_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%departamento}}', [
            'id' => $this->primaryKey(),
            'departamento'  => $this->string(150)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%departamento}}');
    }
}
