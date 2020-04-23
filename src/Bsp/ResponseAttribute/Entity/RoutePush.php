<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/23
 * Time: 10:06
 * Source: RoutePush.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Object\WaybillRouteDetail;

class RoutePush
{
    /**
     * @var WaybillRouteDetail[]
     * @Serializer\XmlList(inline=true,entry="WaybillRoute")
     * @Serializer\Type("array<Zeevin\Sf\Bsp\ResponseAttribute\Object\WaybillRouteDetail>")
     */
    private $waybillRoute;

    /**
     * @return WaybillRouteDetail[]
     */
    public function getWaybillRoute(): array
    {
        return $this->waybillRoute;
    }
}