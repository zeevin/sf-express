<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/20
 * Time: 13:48
 * Source: order.php
 * Project: sf-express
 */

require '../vendor/autoload.php';
$config = require './sf-config.php';

use Zeevin\Sf\Bsp\RequestAttribute as BspRequest;

$app = new \Zeevin\Sf\Application($config);

$request = new BspRequest\OrderRequest();
$from = $app->config->get('sf')['from'];
//print_r($from);
$orderId = 'SDMP'.date('ymdHis').random_int(10000, 99999);
$request->setHead($app->config->get('sf')['clientcode'])
    ->getBody()->getOrderRequest()->setOrderid($orderId)
    ->setMailno('SF1021110601405')
    ->setJCompany($from['company'])
    ->setJContact($from['contact'])
    ->setJTel($from['tel'])
    ->setJMobile($from['mobile'])
    ->setJProvince($from['province'])
    ->setJCity($from['city'])
    ->setJCounty($from['county'])
    ->setJAddress($from['address'])
    ->setDCompany('testCorp公司')
    ->setDContact('曹康')
    ->setDTel('13325115789')
    ->setDAddress('山东省济南市历城区东风街道七里铺小区7-2-1');

$request->getBody()->getOrderRequest()->getCargo()->setName("ttt");
$request->getBody()->getOrderRequest()->getAddedService()->setName("COD")->setValue('10');

//echo $request;exit;
//var_dump($app->order);exit;
$ret = $app->order->request($request)->getResult();
//var_dump($ret);
var_dump($ret->getBody()->getOrderResponse()->getRlsInfo());