<?php


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