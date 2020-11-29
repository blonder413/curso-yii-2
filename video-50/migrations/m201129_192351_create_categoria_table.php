<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categoria}}`.
 */
class m201129_192351_create_categoria_table extends Migration
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

        $this->createTable('{{%categoria}}', [
            'id'            => $this->primaryKey(),
            'categoria'        => $this->string(150)->notNull(),
            'slug'          => $this->string(150)->notNull(),
            'imagen'      => $this->string(150)->notNull(),
            'descripcion'  => $this->text()->notNull(),
            'created_by'    => $this->integer()->notNull(),
            'created_at'    => $this->dateTime(),
            'updated_by'    => $this->integer()->notNull(),
            'updated_at'    => $this->dateTime(),
        ], $options);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categoria}}');
    }
}
