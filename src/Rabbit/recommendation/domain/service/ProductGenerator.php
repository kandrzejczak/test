<?php


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
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
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