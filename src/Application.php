<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/20
 * Time: 11:40
 * Source: Application.php
 * Project: sf-express
 */

namespace Zeevin\Sf;


use DusanKasan\Knapsack\Collection;
use Zeevin\Sf\Bsp\OrderClient;
use Zeevin\Sf\Bsp\OrderSearchClient;
use Zeevin\Sf\Bsp\ServiceProvider;
use Zeevin\Sf\Kernel\ServiceContainer;

/**
 * Class Application
 *
 * @property Collection $config;
 *
 * @property OrderClient $order
 * @property OrderSearchClient $orderSearch
 * @package Zeevin\Sf
 */
class Application extends ServiceContainer
{
    protected $providers = [
        ServiceProvider::class
    ];

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this[$name];
    }
}