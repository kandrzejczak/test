<?php


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
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     */
    public function setCategoryId(CategoryId $categoryId)
    {
        $this->categoryId = $categoryId;
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
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;
    }
}