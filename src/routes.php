<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 16:44
 */

/**
 * @var \Slim\App $app
 */
$app->get('/', App\AppController::class . ':ip_address_without_data');
$app->get('/json', App\AppController::class . ':ip_address_without_data');
$app->get('/html', App\AppController::class . ':view_ip_address');
$app->get('/view', App\AppController::class . ':view_ip_address');
$app->get('/ip', App\AppController::class . ':only_ip_txt');
$app->get('/ip_json', App\AppController::class . ':only_ip');
$app->get('/php', App\AppController::class . ':php');
