<?php

use Rabbit\recommendation\domain\product\ProductFactory;
use Rabbit\recommendation\domain\repository\ProductRepository;
use Rabbit\recommendation\domain\service\ProductGenerator;
use Rabbit\recommendation\domain\service\Recommendations;
use Rabbit\recommendation\domain\strategy\FilterStrategiesFactory;
use Rabbit\recommendation\domain\strategy\RecommendationStrategiesFactory;
use Rabbit\recommendation\domain\valueobject\UserId;

require_once __DIR__.'/vendor/autoload.php';

$repository = new ProductRepository();
$productGenerator = new ProductGenerator($repository, new ProductFactory());
$productGenerator->generateProducts();
//var_dump($repository->getAll());

$recommendations = new Recommendations(new RecommendationStrategiesFactory($repository), new FilterStrategiesFactory());
$products = $recommendations->recommend(2, new UserId(1));
var_dump($products);