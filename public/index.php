<?php
	date_default_timezone_set('Asia/Jakarta');
    require '../vendor/autoload.php';
    define('APPLICATION_PATH', realpath(dirname(__DIR__)));

    $app = new \Slim\Slim(array(
        'templates.path' => APPLICATION_PATH . '/app/views',
    ));

    $app->view(new \Slim\Views\Twig());

    $app->view->parserOptions = array(
        'charset' => 'utf-8',
        'cache' => APPLICATION_PATH . '/app/storage/cache',
        'auto_reload' => true,
        'strict_variables' => false,
        'autoescape' => true
    );

    $app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

    $app->get('/', function () use ($app) {
        $app->render('layout.twig');
    });

    $app->run();