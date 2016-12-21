<?php
namespace Rabbit\recommendation\domain\strategy;

use Rabbit\recommendation\domain\product\Product;
use Rabbit\recommendation\domain\repository\ProductRepository;

class RandomRecommendationStrategy implements RecommendationStrategies
{
    /**
     * @var ProductRepository;
     */
    private $productRepository;

    /**
     * TopRecommendationStrategy constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return Product[]
     */
    public function getRecommendedProducts(int $maxProductsCount): array
    {
        $products = $this->productRepository->getAll();
        shuffle($products);
        return array_slice($products, 0, $maxProductsCount);
    }
}