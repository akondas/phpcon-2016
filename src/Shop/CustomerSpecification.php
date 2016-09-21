<?php

declare (strict_types = 1);

namespace Shop;

interface CustomerSpecification
{
    /**
     * @param Customer $customer
     *
     * @return bool
     */
    public function isSatisfiedBy(Customer $customer): bool;
}
