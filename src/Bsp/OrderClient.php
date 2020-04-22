<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/20
 * Time: 13:35
 * Source: OrderClient.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp;


use Zeevin\Sf\Bsp\ResponseAttribute\OrderServiceResponse;
use Zeevin\Sf\Kernel\BaseClient;

/**
 * Class OrderClient
 * @method OrderServiceResponse|string getResult($format = 'object')
 *
 * @package Zeevin\Sf\Bsp
 */
class OrderClient extends BaseClient
{
    protected $service = 'Order';
}