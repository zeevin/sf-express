<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:51
 * Source: orderSearch.php
 * Project: sf-express
 */

require '../vendor/autoload.php';
$config = require './sf-config.php';

use Zeevin\Sf\Bsp\RequestAttribute as BspRequest;

$app = new \Zeevin\Sf\Application($config);

$request = new BspRequest\OrderSearchRequest();

$orderId = 'SDMP20042115415785512';

$request->setHead($app->config->get('sf')['clientcode'])->getBody()->getOrderSearchRequest()->setOrderId($orderId);
//echo $request;exit;
$ret = $app->orderSearch->request($request)->getResult();
//echo $ret;exit;
//print_r($ret->getErrorMessage());exit;
print_r($ret->getBody()->getOrderResponse());
