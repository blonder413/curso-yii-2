<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%editorial}}`.
 */
class m201110_114406_create_editorial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%editorial}}', [
            'id' => $this->primaryKey(),
            'editorial' => $this->string(100)->notNull(),
            'slug' => $this->string(100)->notNull(),
            'created_by'    => $this->integer()->notNull(),
            'created_at'    => $this->dateTime(),
            'updated_by'    => $this->integer()->notNull(),
            'updated_at'    => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%editorial}}');
    }
}
