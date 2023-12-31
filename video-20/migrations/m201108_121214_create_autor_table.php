<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%autor}}`.
 */
class m201108_121214_create_autor_table extends Migration
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

        $this->createTable('{{%autor}}', [
            'id' => $this->primaryKey(),
            'nombre'  => $this->string(155)->notNull(),
            'slug'  => $this->string(155)->notNull(),
            'pais_id'    => $this->integer(),
            'created_by'    => $this->integer(),
            'created_at'    => $this->dateTime(),
            'updated_by'    => $this->integer(),
            'updated_at'    => $this->dateTime(),
        ], $options);

        $this->addForeignKey('paisautor', 'autor', 'pais_id', 'pais', 'id', 'no action', 'no action');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('paisautor', 'autor');
        $this->dropTable('{{%autor}}');
    }
}
