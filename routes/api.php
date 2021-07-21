<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CategoryProductController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductImagesController;
use App\Http\Controllers\Api\ProductResourcesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get(
    '/user',
    function (Request $request) {
        return $request->user();
    }
);

Route::put('sort/category/save', [CategoryController::class, 'saveSort']);

Route::apiResources(
    [
        'category'         => CategoryController::class,
        'product.image'    => ProductImagesController::class,
        'product.resource' => ProductResourcesController::class,
    ]
);


Route::put('product/{product}/images/sort/save', [ProductImagesController::class, 'saveSort']);
Route::apiResource('product', ProductController::class)->only('show');
Route::apiResource('category.product', CategoryProductController::class)->only('index');



