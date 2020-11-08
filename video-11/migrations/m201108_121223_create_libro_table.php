<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%libro}}`.
 */
class m201108_121223_create_libro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $options = null;

        if ( $this->db->driverName === 'mysql' ) {
            $options = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=innodb';
        }

        $this->createTable('{{%libro}}', [
            'id' => $this->primaryKey(),
            'titulo'  => $this->string(155)->notNull(),
            'autor'  => $this->string(155)->notNull(),
            'editorial'     => $this->string(255)->notNull(),
            'publicado_en'     => $this->date(),
        ], $options);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%libro}}');
    }
}
