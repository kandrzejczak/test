<?php
namespace Rabbit\recommendation\domain\strategy;

interface FilterStrategies
{
    /**
     * @param Product[] $products
     * @param UserId $userId
     * @return Product[]
     */
    public function filterProducts(array $products, UserId $userId): array;
}