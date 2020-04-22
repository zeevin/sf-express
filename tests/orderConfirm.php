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

use Zeevin\Sf\Application;
use Zeevin\Sf\Bsp\RequestAttribute as BspRequest;

$app = new Application($config);

$request = new BspRequest\OrderConfirmRequest();
//print_r($request);exit;

$orderId = 'SDMP20042115415785512';

$request->setHead($app->config->get('sf')['clientcode'])
    ->getBody()
    ->getOrderConfirmRequest()->setOrderId($orderId)->setDealType(2)
    ->getOrderConfirmOption()->setVolume(12)->setWeight(1);
//var_dump($request);exit;
echo $request;exit;
$ret = $app->orderConfirm->request($request)->getResult();
//echo $ret;exit;
var_dump($ret);
