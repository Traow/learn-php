<?php

use App\Router;

Router::addRoute('/', [App\Controllers\PublicController::class, 'home']);

Router::addRoute('/about', [PublicController::class, 'about']);