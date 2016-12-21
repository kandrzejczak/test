<?php
namespace Rabbit\recommendation\domain\strategy;

use Rabbit\recommendation\domain\product\Product;
use Rabbit\recommendation\domain\valueobject\UserId;

interface FilterStrategies
{
    /**
     * @param Product[] $products
     * @param UserId $userId
     * @return Product[]
     */
    public function filterProducts(array $products, UserId $userId): array;
}