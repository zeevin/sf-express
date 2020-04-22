<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:52
 * Source: OrderSearchClient.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp;


use Zeevin\Sf\Bsp\ResponseAttribute\OrderSearchServiceResponse;
use Zeevin\Sf\Kernel\BaseClient;

/**
 * Class OrderSearchClient
 * @method OrderSearchServiceResponse|string getResult($format = 'object')
 *
 * @package Zeevin\Sf\Bsp
 */
class OrderSearchClient extends BaseClient
{
    protected $service = 'OrderSearch';
}