<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%persona}}`.
 */
class m201128_203027_create_persona_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%persona}}', [
            'id' => $this->primaryKey(),
            'nombre'    => $this->string(100)->notNull(),
            'municipio_id'  => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk_municipio_persona',
            'persona',
            'municipio_id',
            'municipio',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_municipio_persona', 'persona');
        $this->dropTable('{{%persona}}');
    }
}
