<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_assignment}}`.
 */
class m201115_154148_create_auth_assignment_table extends Migration
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
        
        $this->createTable('{{%auth_assignment}}', [
            'item_name' => $this->string(64)->notNull(),
            'user_id' => $this->string(64)->notNull(),
            'created_at' => $this->integer(),
        ], $options);

        $this->addPrimaryKey('auth_assignment_pk', 'auth_assignment', ['item_name', 'user_id']);
        $this->addForeignKey(
            'item_name_auth_assignment_fk',
            'auth_assignment',
            'item_name',
            'auth_item',
            'name',
            'no action',
            'no action',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('item_name_auth_assignment_fk', 'auth_assignment');
        $this->dropTable('{{%auth_assignment}}');
    }
}
