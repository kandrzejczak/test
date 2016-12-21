<?php
namespace Rabbit\recommendation\domain\strategy;

use Rabbit\recommendation\domain\product\Product;
use Rabbit\recommendation\domain\repository\ProductRepository;

class TopRecommendationStrategy implements RecommendationStrategies
{
    /**
     * @var ProductRepository;
     */
    private $productRepository;

    /**
     * @return Product[]
     */
    public function getRecommendedProducts(int $maxProductsCount): array
    {
        $products = $this->productRepository->getTop();
        return array_slice($products, 0, $maxProductsCount);
    }
}