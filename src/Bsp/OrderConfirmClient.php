<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:52
 * Source: OrderConfirmClient.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp;


use Zeevin\Sf\Bsp\ResponseAttribute\OrderConfirmServiceResponse;
use Zeevin\Sf\Kernel\BaseClient;

/**
 * Class OrderConfirmClient
 *
 * @method OrderConfirmServiceResponse|string getResult($format = 'object')
 * @package Zeevin\Sf\Bsp
 */
class OrderConfirmClient extends BaseClient
{
    protected $service = 'OrderConfirm';
}