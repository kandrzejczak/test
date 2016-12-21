<?php
namespace Rabbit\recommendation\domain\strategy;

interface RecommendationStrategies
{
    /**
     * @param int $maxProductsCount
     * @return array
     */
    public function getRecommendedProducts(int $maxProductsCount): array;
}