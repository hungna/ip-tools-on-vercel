<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 16:44
 */

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @var \Slim\App $app
 */
$app->get('/', App\AppController::class . ':ip_address');
$app->get('/ip', App\AppController::class . ':only_ip');
$app->get('/php', App\AppController::class . ':php');

//$app->group('/api/v1', function () use ($app) {
//	$app->get('/test', App\AppController::class . ':json');
//});
//
//$app->group('', function () use ($app) {
//	$app->get('/app/test', App\AppController::class . ':test');
//});
