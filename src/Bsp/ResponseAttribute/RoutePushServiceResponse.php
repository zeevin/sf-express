<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/23
 * Time: 10:04
 * Source: RoutePushServiceResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Entity\RoutePush;
use Zeevin\Sf\Kernel\BaseResponseAttribute;

/**
 * Class RoutePushServiceResponse
 * @Serializer\XmlRoot("Request")
 * @package Zeevin\Sf\Bsp\ResponseAttribute
 */
class RoutePushServiceResponse extends BaseResponseAttribute
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    protected $service;
    /**
     * @var RoutePush
     * @Serializer\SerializedName("Body")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\RoutePush")
     */
    protected $body;

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return RoutePush
     */
    public function getBody(): RoutePush
    {
        return $this->body;
    }
}