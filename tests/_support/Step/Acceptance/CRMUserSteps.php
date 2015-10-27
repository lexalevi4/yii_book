<?php
namespace Step\Acceptance;

class CRMUserSteps extends \AcceptanceTester
{
    function amInQueryCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/query');
    }
//
//    public function imagineCustomer()
//    {
//        $faker = \Faker\Factory::create();
//        return [
//            'CustomerRecord[name]' => $faker->name,
//            'CustomerRecord[birth_date]' => $faker->date('Y-m-d'),
//            'CustomerRecord[notes]' => $faker->sentence(8),
//            'PhoneRecord[number]' => $faker->phoneNumber
//        ];
//    }

    function fillCustomerDataForm($customer_data)
    {
        $I = $this;
        $I->fillField('PhoneRecord[number]',
            $customer_data['PhoneRecord[number]']);

    }

    function clickSearchButton()
    {
        $I = $this;
        $I->click('Search');
//        $I->wait(1);
    }

    public function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }

    function seeCustomerInList($customer_data)
    {
        $I = $this;
        $I->see($customer_data['CustomerRecord[name]'], '#search_results');
    }

    function dontSeeCustomerInList($customer_data)
    {
        $I = $this;
        $I->dontSee($customer_data['CustomerRecord[name]'], '#search_results');
    }

}
