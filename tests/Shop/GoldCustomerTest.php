<?php

declare (strict_types = 1);

namespace tests;

use Shop\Customer;
use Shop\GoldCustomer;

class GoldCustomerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsMeaninglessAndGivesFullCoverage()
    {
        $customer = new Customer();
        $goldCustomer = new GoldCustomer();

        $this->assertFalse($goldCustomer->isSatisfiedBy($customer));
    }

    /**
     * @param int $totalPurchases
     * @param bool $expected
     *
     * @dataProvider customerProvider
     */
    public function testIsSatisfiedReturnsCorrectResult(int $totalPurchases, bool $expected)
    {
        $customer = new Customer($totalPurchases);
        $goldCustomer = new GoldCustomer();

        $this->assertEquals($expected, $goldCustomer->isSatisfiedBy($customer));
    }

    /**
     * @return array
     */
    public function customerProvider()
    {
        return [
            [1, false],
            [99, false],
            [100, true],
            [200, true]
        ];
    }
}
