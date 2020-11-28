<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%municipio}}`.
 */
class m201128_202718_create_municipio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%municipio}}', [
            'id' => $this->primaryKey(),
            'municipio' => $this->string(150)->notNull(),
            'departamento_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk_departamento_municipio',
            'municipio',
            'departamento_id',
            'departamento',
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
        $this->dropForeignKey('fk_departamento_municipio', 'municipio');
        $this->dropTable('{{%municipio}}');
    }
}
