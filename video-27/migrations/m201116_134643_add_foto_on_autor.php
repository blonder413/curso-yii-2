<?php

use yii\db\Migration;

/**
 * Class m201116_134643_add_foto_on_autor
 */
class m201116_134643_add_foto_on_autor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('autor', 'foto', 'string(100)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('autor', 'foto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201116_134643_add_foto_on_autor cannot be reverted.\n";

        return false;
    }
    */
}
