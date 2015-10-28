<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 14:33
 */


namespace app\models\customer;

class Phone {

    /** @var string */
    public $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

}