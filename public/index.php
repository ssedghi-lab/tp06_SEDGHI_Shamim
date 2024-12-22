<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Ajout des routes
require __DIR__ . '/../src/routes.php';

$app->run();
