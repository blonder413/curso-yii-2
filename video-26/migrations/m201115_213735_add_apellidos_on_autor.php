<?php

use yii\db\Migration;

/**
 * Class m201115_213735_add_apellidos_on_autor
 */
class m201115_213735_add_apellidos_on_autor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('autor', 'nombre', 'nombres');
        $this->addColumn('autor', 'apellidos', 'string(100)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->rename('autor', 'nombres', 'nombre');
        $this->dropColumn('autor', 'apellidos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201115_213735_add_apellidos_on_autor cannot be reverted.\n";

        return false;
    }
    */
}
