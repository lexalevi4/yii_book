<?php

use yii\db\Schema;
use yii\db\Migration;

class m151028_125940_update_users_table extends Migration
{
    public function up()
    {

        $this->addColumn('user', 'auth_key','string UNIQUE');

    }

    public function down()
    {
        echo "m151028_125940_update_users_table cannot be reverted.\n";

        return false;
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
