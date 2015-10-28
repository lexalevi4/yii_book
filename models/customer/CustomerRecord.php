<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 15:43
 */

namespace app\models\customer;

use yii\db\ActiveRecord;

class CustomerRecord extends ActiveRecord
{

    public static function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 256],
            ['birth_date', 'date', 'format' => 'yyyy-mm-dd'],
            ['notes', 'safe'],
        ];

    }


}