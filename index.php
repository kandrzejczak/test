<?php

require_once __DIR__.'/vendor/autoload.php';

$productGenerator = new ProductGenerator(new ProductRepository());
$productGenerator->generateProducts();

$recommendations = new Recommendations(new RecommendationStrategiesFactory(), new FilterStrategiesFactory());
$products = $recommendations->recommend(10, new UserId(1));
var_dump($products);