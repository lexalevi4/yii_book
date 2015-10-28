<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 15:43
 */

namespace app\models\customer;

use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{

    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'],'required'],

        ];

    }


}