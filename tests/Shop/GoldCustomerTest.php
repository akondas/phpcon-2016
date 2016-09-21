<?php
declare(strict_types = 1);

namespace tests;

use Shop\Customer;
use Shop\GoldCustomer;

class GoldCustomerTest extends \PHPUnit_Framework_TestCase
{

    public function testIsSatisfiedByCustomer()
    {
        $customer = new Customer();
        $goldCustomer = new GoldCustomer();

        $this->assertFalse($goldCustomer->isSatisfiedBy($customer));
    }

}