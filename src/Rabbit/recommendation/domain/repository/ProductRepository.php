<?php
namespace Rabbit\recommendation\domain\repository;

use Rabbit\recommendation\domain\product\Product;
use Rabbit\recommendation\domain\valueobject\UserId;

class ProductRepository
{
    static $products = [];

    public function save(Product $product)
    {
        static::$products[] = $product;
    }

    /**
     * @return Product[]
     */
    public function getAll(): array
    {
        return static::$products;
    }

    /**
     * @return Product[]
     */
    public function getTop(): array
    {
        return static::$products;
    }

    /**
     * @param UserId $userId
     * @return array
     */
    public function getByUserId(UserId $userId): array
    {
        return static::$products;
    }
}