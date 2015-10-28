<?php

use yii\db\Schema;
use yii\db\Migration;

class m151027_120124_init_customers_table extends Migration
{
    public function up()
    {

        $this->createTable(
            'customer',
            [
             'id'=>'pk',
                'name'=>'string',
                'birth_date'=>'date',
                'notes'=>'text'
            ],
            'ENGINE=InnoDB'
        );


    }

    public function down()
    {
//        echo "m151027_120124_init_customers_table cannot be reverted.\n";

        $this->dropTable('customer');
//        return false;
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
