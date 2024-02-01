<?php
use Bramus\Router\Router;
use Thangnghiem\Mvcoop\Controllers\Admin\DashboardController;
use Thangnghiem\Mvcoop\Controllers\Admin\UsersController;
use Thangnghiem\Mvcoop\Controllers\Admin\CategoriesController;
use Thangnghiem\Mvcoop\Controllers\Admin\PostsController;
use Thangnghiem\Mvcoop\Controllers\Admin\AuthenticateController;
use Thangnghiem\Mvcoop\Controllers\Client\HomeController;


//Create Router instance
$router = new Router();

//Define routes
$router -> get("/", HomeController::class . '@index');

$router -> match('GET|POST', '/auth/login', AuthenticateController::class .'@login');

$router->mount('/admin', function () use ($router) {
    $router->get('/',       DashboardController::class . '@index');
    $router->get('/logout', AuthenticateController::class .'@logout');

    $router->mount('/users', function () use ($router) {
        $router->get('/',                                UsersController::class . '@index');
        $router->get('/{user_id}/show',                  UsersController::class . '@show');
        $router->get('/{user_id}/delete',                UsersController::class . '@delete');
        $router->match('GET|POST', '/{user_id}/update',  UsersController::class . '@update');
        $router->match('GET|POST', '/create',            UsersController::class . '@create');
    });

    $router->mount('/categories', function () use ($router) {
        $router->get('/',                                CategoriesController::class . '@index');
        $router->get('/{cate_id}/show',                  CategoriesController::class . '@show');
        $router->get('/{cate_id}/delete',                CategoriesController::class . '@delete');
        $router->match('GET|POST', '/{cate_id}/update',  CategoriesController::class . '@update');
        $router->match('GET|POST', '/create',            CategoriesController::class . '@create');
    });

    $router->mount('/posts', function () use ($router) {
        $router->get('/',                                PostsController::class . '@index');
        $router->get('/{post_id}/show',                  PostsController::class . '@show');
        $router->get('/{post_id}/delete',                PostsController::class . '@delete');
        $router->match('GET|POST', '/{post_id}/update',  PostsController::class . '@update');
        $router->match('GET|POST', '/create',            PostsController::class . '@create');
    });
});
$router->before('GET|POST', '/admin/*', function()
{
    if(!isset($_SESSION['user']))
    {
        header('Location: /auth/login');
        exit();
    }
});
$router->before('GET|POST', '/admin/.*', function()
{
    if(!isset($_SESSION['user']))
    {
        header('Location: /auth/login');
        exit();
    }
});
//Run it
$router -> run();