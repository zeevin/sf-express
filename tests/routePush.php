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

use JMS\Serializer\SerializerBuilder;
use Zeevin\Sf\Bsp\ResponseAttribute\RoutePushServiceResponse;

$app = new \Zeevin\Sf\Application($config);

$xml_raw_data = file_get_contents("php://input", 'r');
//echo $xml_raw_data;exit;
$serializer = SerializerBuilder::create()->build();
/**
 * @var RoutePushServiceResponse $request
 */
$request = $serializer->deserialize($xml_raw_data, 'Zeevin\Sf\Bsp\ResponseAttribute\RoutePushServiceResponse', 'xml');
print_r($request->getBody()->getWaybillRoute());
