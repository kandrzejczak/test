<?php
namespace Rabbit\recommendation\domain\service;

use Rabbit\recommendation\domain\product\Product;
use Rabbit\recommendation\domain\strategy\FilterStrategiesFactory;
use Rabbit\recommendation\domain\strategy\RecommendationStrategiesFactory;
use Rabbit\recommendation\domain\valueobject\UserId;

class Recommendations
{
    /**
     * @var RecommendationStrategiesFactory
     */
    private $recommendationStrategiesFactory;

    /**
     * @var FilterStrategiesFactory
     */
    private $filterStrategiesFactory;

    /**
     * Recommendations constructor.
     * @param RecommendationStrategiesFactory $recommendationStrategiesFactory
     * @param FilterStrategiesFactory $filterStrategiesFactory
     */
    public function __construct(
        RecommendationStrategiesFactory $recommendationStrategiesFactory,
        FilterStrategiesFactory $filterStrategiesFactory
    ) {
        $this->recommendationStrategiesFactory = $recommendationStrategiesFactory;
        $this->filterStrategiesFactory = $filterStrategiesFactory;
    }

    /**
     * @param int $maxProductsCount
     * @return Product[]
     */
    public function recommend(int $maxProductsCount, UserId $userId): array
    {
        $strategies = $this->recommendationStrategiesFactory->create();
        $products = [];

        foreach ($strategies as $strategy) {
            $products = array_merge($products, $strategy->getRecommendedProducts($maxProductsCount));
            if (count($products) >= $maxProductsCount) {
                break;
            }
        }

        $products = array_slice($products, 0, $maxProductsCount);

        $filters = $this->filterStrategiesFactory->create();

        foreach ($filters as $filter) {
            $products = $filter->filterProducts($products, $userId);
        }

        return $products;
    }
}