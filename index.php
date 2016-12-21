<?php
use Rabbit\recommendation\domain\repository\ProductRepository;


require_once __DIR__.'/vendor/autoload.php';

$repository = new ProductRepository();
$productGenerator = new ProductGenerator($repository);
$productGenerator->generateProducts();
var_dump($repository->getAll());

//
//$recommendations = new Recommendations(new RecommendationStrategiesFactory(), new FilterStrategiesFactory());
//$products = $recommendations->recommend(10, new UserId(1));
//var_dump($products);