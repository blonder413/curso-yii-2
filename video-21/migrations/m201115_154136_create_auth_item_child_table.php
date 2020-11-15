<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_item_child}}`.
 */
class m201115_154136_create_auth_item_child_table extends Migration
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
        
        $this->createTable('{{%auth_item_child}}', [
            'parent' => $this->string(64)->notNull(),
            'child' => $this->string(64)->notNull(),
        ], $options);

        $this->addPrimaryKey('parent_child_auth_item_child', 'auth_item_child', ['parent', 'child']);
        
        $this->addForeignKey(
            'parent_auth_item_child',
            'auth_item_child',
            'parent',
            'auth_item',
            'name',
            'no action',
            'no action',
        );

        $this->addForeignKey(
            'child_auth_item_child',
            'auth_item_child',
            'child',
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
        $this->dropForeignKey('parent_auth_item_child', 'auth_item_child');
        $this->dropForeignKey('auth_item_child', 'auth_item_child');
        $this->dropTable('{{%auth_item_child}}');
    }
}
