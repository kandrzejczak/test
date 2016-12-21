<?php


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
            if (count($products) == $maxProductsCount) {
                break;
            }
        }

        $filters = $this->filterStrategiesFactory->create();
        $products = [];

        foreach ($filters as $filter) {
            $products = $filter->filterProducts($products, $userId);
        }

        if (count($products) < $maxProductsCount) {
            foreach ($strategies as $strategy) {
                $products = array_merge($products, $strategy->getRecommendedProducts($maxProductsCount));
                if (count($products) == $maxProductsCount) {
                    break;
                }
                $maxProductsCount = $maxProductsCount - count($products);
            }
        }

        return $products;
    }
}