<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 14:31
 */


namespace app\models\customer;

Class Customer {

    /** @var string */
    public $name;

    /** @var \DateTime */
    public $birth_date;

    /** @var string */
    public $notes = '';

    /** @var PhoneRecord[] */
    public $phones = [];

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }


}