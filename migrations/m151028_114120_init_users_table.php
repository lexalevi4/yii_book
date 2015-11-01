<?php

use yii\db\Schema;
use yii\db\Migration;

class m151028_114120_init_users_table extends Migration
{
    public function up()
    {

        $this->createTable(
            'user',
            [
                'id' => 'pk',
                'username' => 'string unique',
                'password' => 'string'
            ],
            'ENGINE=InnoDB'
        );

    }

    public function down()
    {
//        echo "m151028_114120_init_users_table cannot be reverted.\n";
//
//        return false;
        $this->dropTable('user');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
