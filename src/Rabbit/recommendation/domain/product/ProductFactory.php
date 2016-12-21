<?php
namespace Rabbit\recommendation\domain\product;

use Rabbit\recommendation\domain\valueobject\CategoryId;
use Rabbit\recommendation\domain\valueobject\Price;

class ProductFactory
{
    /**
     * @param string $name
     * @param int $categoryId
     * @param int $price
     * @return Product
     */
    public function create(string $name, int $categoryId, int $price): Product
    {
        return (new Product())
            ->setCategoryId(new CategoryId($categoryId))
            ->setName($name)
            ->setPrice(new Price($price));
    }
}