<?php

declare (strict_types = 1);

namespace Shop;

class Customer
{

    /**
     * @var int
     */
    private $totalPurchases;

    /**
     * @param $totalPurchases
     */
    public function __construct(int $totalPurchases = 0)
    {
        $this->totalPurchases = $totalPurchases;
    }

    /**
     * @return int
     */
    public function getTotalPurchases(): int
    {
        return $this->totalPurchases;
    }

}
