<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/20
 * Time: 13:46
 * Source: ServiceProvider.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['order'] = function ($app) {
            return new OrderClient($app);
        };
        $app['orderSearch'] = function ($app) {
            return new OrderSearchClient($app);
        };
        $app['orderConfirm'] = function ($app) {
          return new OrderConfirmClient($app);
        };
    }
}