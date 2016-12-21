<?php
namespace Rabbit\recommendation\domain\service;

use Rabbit\recommendation\domain\product\ProductFactory;
use Rabbit\recommendation\domain\repository\ProductRepository;

class ProductGenerator
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var ProductFactory
     */
    private $productFactory;

    /**
     * ProductGenerator constructor.
     * @param ProductRepository $productRepository
     * @param ProductFactory $productFactory
     */
    public function __construct(ProductRepository $productRepository, ProductFactory $productFactory)
    {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
    }

    public function generateProducts()
    {
        $productsData = [];
        $productsData[] = [
            'name' => 'Produkt 1',
            'categoryId' => 1,
            'price' => 123
        ];
        $productsData[] = [
            'name' => 'Produkt 2',
            'categoryId' => 1,
            'price' => 123
        ];
        $productsData[] = [
            'name' => 'Produkt 3',
            'categoryId' => 1,
            'price' => 123
        ];
        $productsData[] = [
            'name' => 'Produkt 4',
            'categoryId' => 1,
            'price' => 123
        ];

        foreach ($productsData as $productData) {
            $product = $this->productFactory->create(
                $productData['name'],
                $productData['categoryId'],
                $productData['price']);
            $this->productRepository->save($product);
        }
    }
}