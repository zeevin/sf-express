<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 17:22
 * Source: RouteServiceResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Entity\Route;
use Zeevin\Sf\Kernel\BaseResponseAttribute;

/**
 * Class RouteServiceResponse
 * @Serializer\XmlRoot("Response")
 * @package Zeevin\Sf\Bsp\ResponseAttribute
 */
class RouteServiceResponse extends BaseResponseAttribute
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    protected $service;
    /**
     * @Serializer\SerializedName("Body")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\Route")
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
     * @return Route
     */
    public function getBody()
    {
        return $this->body;
    }
}