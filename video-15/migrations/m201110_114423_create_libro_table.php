<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%libro}}`.
 */
class m201110_114423_create_libro_table extends Migration
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
            'id'            => $this->primaryKey(),
            'titulo'        => $this->string(100)->notNull(),
            'slug'          => $this->string(100)->notNull(),
            'autor_id'      => $this->integer()->notNull(),
            'editorial_id'  => $this->integer()->notNull(),
            'publicado_en'  => $this->date(),
            'created_by'    => $this->integer()->notNull(),
            'created_at'    => $this->dateTime(),
            'updated_by'    => $this->integer()->notNull(),
            'updated_at'    => $this->dateTime(),
        ], $options);

        $this->addForeignKey('autorlibro', 'libro', 'autor_id', 'autor', 'id', 'no action', 'no action');
        $this->addForeignKey('editoriallibro', 'libro', 'editorial_id', 'editorial', 'id', 'no action', 'no action');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('autorlibro', 'libro');
        $this->dropForeignKey('editoriallibro', 'libro');
        $this->dropTable('{{%libro}}');
    }
}
