<?php
namespace Rabbit\recommendation\domain\strategy;

use Rabbit\recommendation\domain\repository\ProductRepository;

class RecommendationStrategiesFactory
{
    /**
     * @var ProductRepository;
     */
    private $productRepository;

    /**
     * RecommendationStrategiesFactory constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return RecommendationStrategies[]
     */
    public function create(): array
    {
        return [
          new TopRecommendationStrategy($this->productRepository)
        ];
    }
}