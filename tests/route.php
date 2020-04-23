<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:51
 * Source: route.php
 * Project: sf-express
 */

require '../vendor/autoload.php';
$config = require './sf-config.php';

use Zeevin\Sf\Bsp\RequestAttribute as BspRequest;

$app = new \Zeevin\Sf\Application($config);

$request = new BspRequest\RouteRequest();

$orderId = 'SDMP20042215524646643';

$request->setHead($app->config->get('sf')['clientcode'])->getBody()->getRouteRequest()
    ->setTrackingType(BspRequest\Object\Route::TRACKING_TYPE_SYS)
    ->setTrackingNumber($orderId);
//echo $request;exit;
$ret = $app->route->request($request)->getResult();
//$ret = $app->route->request($request)->getResult('xml');echo $ret;exit;

print_r($ret->getBody());exit;
print_r($ret->getBody());
