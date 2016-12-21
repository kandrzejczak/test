<?php
namespace Rabbit\recommendation\domain\product;

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