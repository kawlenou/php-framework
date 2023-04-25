<?php declare(strict_types = 1);

use App\Controllers\BaseController;
use kawlenou\Foundation\Router\Route;

return [
    'index' => Route::get('/', [BaseController::class, 'index']),
];
