<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 14:20
 */


namespace app\controllers;

use app\models\customer\Customer;
use app\models\customer\Phone;
use app\models\customer\CustomerRecord;
use app\models\customer\PhoneRecord;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class CustomersController extends Controller
{

    public function actionIndex()
    {
        $records = $this->findRecordsByQuery();
        return $this->render('index', compact('records'));
    }


    public function actionAdd()
    {
        $customer = new CustomerRecord();
        $phone = new PhoneRecord();

        if ($this->load($customer, $phone, $_POST)) {
            $this->store($this->makeCustomer($customer, $phone));
            return $this->redirect('/customers');
        }

        return $this->render('add', compact('customer', 'phone'));
    }

    public function actionQuery()
    {
        return $this->render('query');
    }

    private function findRecordsByQuery()
    {
        $number = \Yii::$app->request->get('phone_number');
        if ($number) {
            $records = $this->getRecordsByPhoneNumber($number);
        } else {
            $records = $this->getAllRecords();

        }
        $dataProvider = $this->wrapIntoDataProvider($records);
        return $dataProvider;
    }

    private function wrapIntoDataProvider($data)
    {
        return new ArrayDataProvider(
            [
                'allModels' => $data,
                'pagination' => false
            ]
        );
    }

    private function getAllRecords()
    {
        $customer_records = CustomerRecord::find()->all();
        $result = [];
        foreach ($customer_records as $current) {
//            echo "<hr />";
//            echo $current->name;
//            print_r($current);
//            $phone_record = ;

            $result [] = $this->makeCustomer($current, PhoneRecord::findOne(['customer_id' => $current->id]));
        }
        return $result;

    }

    private function getRecordsByPhoneNumber($number)
    {
        $phone_record = PhoneRecord::findOne(['number' => $number]);
        if (!$phone_record) {
            return [];
        }

        $customer_record = CustomerRecord::findOne($phone_record->customer_id);
        if (!$customer_record) {
            return [];
        }

        return [$this->makeCustomer($customer_record, $phone_record)];


    }


    private function load(CustomerRecord $customer, PhoneRecord $phone, array $post)
    {
        return $customer->load($post) &&
        $phone->load($post) &&
        $customer->validate() &&
        $phone->validate(['number']);
    }


    private function store(Customer $customer)
    {
        $customer_record = new CustomerRecord();
        $customer_record->name = $customer->name;
        $customer_record->birth_date = $customer->birth_date->format("Y-m-d");
        $customer_record->notes = $customer->notes;
        $customer_record->save();

        foreach ($customer->phones as $phone) {
            $phoneRecord = new PhoneRecord();
            $phoneRecord->number = $phone->number;
            $phoneRecord->customer_id = $customer_record->id;
            $phoneRecord->save();
        }


    }

    private function makeCustomer(CustomerRecord $customerRecord,
                                  PhoneRecord $phoneRecord)
    {
        $name = $customerRecord->name;
        $birth_date = new \DateTime($customerRecord->birth_date);
        $customer = new Customer($name, $birth_date);
        $customer->notes = $customerRecord->notes;
        $customer->phones[] = new Phone($phoneRecord->number);
        return $customer;
    }

}