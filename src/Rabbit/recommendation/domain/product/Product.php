<?php
namespace Rabbit\recommendation\domain\product;

class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var CategoryId
     */
    private $categoryId;

    /**
     * @var Price
     */
    private $price;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return CategoryId
     */
    public function getCategoryId(): CategoryId
    {
        return $this->categoryId;
    }

    /**
     * @param CategoryId $categoryId
     * @return $this
     */
    public function setCategoryId(CategoryId $categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;
        return $this;
    }
}