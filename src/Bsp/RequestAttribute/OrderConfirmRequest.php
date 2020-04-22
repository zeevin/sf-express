<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 11:38
 * Source: OrderConfirmRequest.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\RequestAttribute\Entity\OrderConfirm;
use Zeevin\Sf\Kernel\BaseRequestAttribute;

/**
 * Class OrderConfirmRequest
 * @Serializer\XmlRoot("Request")
 * @package Zeevin\Sf\Bsp\RequestAttribute
 */
class OrderConfirmRequest extends BaseRequestAttribute
{
    /**
     * @Serializer\XmlAttribute
     */
    protected $service = 'OrderConfirmService';

    /**
     * @var OrderConfirm
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Entity\OrderConfirm")
     * @Serializer\SerializedName("Body")
     */
    protected $body;

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @return OrderConfirm
     */
    public function getBody()
    {
        $this->body instanceof OrderConfirm || $this->body = new OrderConfirm();
        return $this->body;
    }
}