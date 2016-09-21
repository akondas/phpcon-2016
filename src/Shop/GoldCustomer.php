<?php

declare (strict_types = 1);

namespace Shop;

class GoldCustomer implements CustomerSpecification
{
    /**
     * @param Customer $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy(Customer $candidate): bool
    {
        return $candidate->getTotalPurchases() >= 100;
    }
}
