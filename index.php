<?php

use Rabbit\recommendation\domain\product\ProductFactory;
use Rabbit\recommendation\domain\repository\ProductRepository;
use Rabbit\recommendation\domain\service\ProductGenerator;
use Rabbit\recommendation\domain\service\Recommendations;
use Rabbit\recommendation\domain\strategy\FilterStrategiesFactory;
use Rabbit\recommendation\domain\strategy\RecommendationStrategiesFactory;

require_once __DIR__.'/vendor/autoload.php';

$productGenerator = new ProductGenerator(new ProductRepository(), new ProductFactory());
$productGenerator->generateProducts();
//$repository = new ProductRepository();
//var_dump($repository->getAll());

$recommendations = new Recommendations(new RecommendationStrategiesFactory(), new FilterStrategiesFactory());
//$products = $recommendations->recommend(10, new UserId(1));
//var_dump($products);