<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 17:24
 * Source: RouteResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Object;


use JMS\Serializer\Annotation as Serializer;


class RouteResponse
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("mailno")
     * @Serializer\Type("string")
     */
    private $mailNo;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("orderid")
     * @Serializer\Type("string")
     */
    private $orderId;
    /**
     * @var RouteDetail[]
     * @Serializer\XmlList(inline=true,entry="Route")
     * @Serializer\Type("array<Zeevin\Sf\Bsp\ResponseAttribute\Object\RouteDetail>")
     */
    private $route;

    /**
     * @return RouteDetail[]
     */
    public function getRoute(): array
    {
        return $this->route;
    }
}