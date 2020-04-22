<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:43
 * Source: OrderConfirmServiceResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Entity\OrderConfirm;
use Zeevin\Sf\Kernel\BaseResponseAttribute;

/**
 * Class OrderSearchServiceResponse
 * @Serializer\XmlRoot("Response")
 * @package Zeevin\Sf\Bsp\ResponseAttribute
 */
class OrderConfirmServiceResponse extends BaseResponseAttribute
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    protected $service;
    /**
     * @Serializer\SerializedName("Body")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\OrderConfirm")
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
     * @return OrderConfirm
     */
    public function getBody()
    {
        return $this->body;
    }
}