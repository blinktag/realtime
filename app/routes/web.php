<?php

use App\Controllers\HomeController;
use App\Controllers\PushController;

$app->get('/', HomeController::class . ':index');
$app->get('/push', PushController::class . ':index');

