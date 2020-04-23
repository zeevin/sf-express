<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:52
 * Source: RouteClient.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp;


use Zeevin\Sf\Bsp\ResponseAttribute\RouteServiceResponse;
use Zeevin\Sf\Kernel\BaseClient;

/**
 * Class RouteClient
 * @method RouteServiceResponse|string getResult($format = 'object')
 *
 * @package Zeevin\Sf\Bsp
 */
class RouteClient extends BaseClient
{
    protected $service = 'Route';
}