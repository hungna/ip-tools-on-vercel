<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 16:44
 */


// DIC configuration
/**
 * @var \Slim\App $app
 */
$container = $app->getContainer();

/**
 * view renderer
 *
 * @param object $c Container
 *
 * @return \Slim\Views\PhpRenderer
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/20/18 16:00
 *
 */
$container['renderer'] = function ($c) {
	$settings = $c->get('settings')['renderer'];
	return new Slim\Views\PhpRenderer($settings['template_path']);
};
