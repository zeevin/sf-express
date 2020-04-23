<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 16:48
 * Source: Route.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class Route
{
    /**
     * @var \Zeevin\Sf\Bsp\RequestAttribute\Object\Route
     * @Serializer\SerializedName("RouteRequest")
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Object\Route")
     */
    private $routeRequest;

    /**
     * @return \Zeevin\Sf\Bsp\RequestAttribute\Object\Route
     */
    public function getRouteRequest(): \Zeevin\Sf\Bsp\RequestAttribute\Object\Route
    {
        $this->routeRequest instanceof \Zeevin\Sf\Bsp\RequestAttribute\Object\Route
        || $this->routeRequest = new \Zeevin\Sf\Bsp\RequestAttribute\Object\Route();

        return $this->routeRequest;
    }
}