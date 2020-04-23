<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 17:23
 * Source: Route.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Object\RouteResponse;

/**
 * Class Route
 *
 * @package Zeevin\Sf\Bsp\ResponseAttribute\Entity
 */
class Route
{
    /**
     * @var RouteResponse
     * @Serializer\SerializedName("RouteResponse")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Object\RouteResponse")
     */
    private $routeResponse;

    /**
     * @return RouteResponse
     */
    public function getRouteResponse(): RouteResponse
    {
        return $this->routeResponse;
    }
}