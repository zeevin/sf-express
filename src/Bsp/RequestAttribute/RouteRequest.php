<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 16:46
 * Source: RouteRequest.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\RequestAttribute\Entity\Route;
use Zeevin\Sf\Kernel\BaseRequestAttribute;

/**
 * Class RouteRequest
 * @Serializer\XmlRoot("Request")
 * @package Zeevin\Sf\Bsp\RequestAttribute
 */
class RouteRequest extends BaseRequestAttribute
{
    /**
     * @Serializer\XmlAttribute
     */
    protected $service = 'RouteService';

    /**
     * @var Route
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Entity\Route")
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
     * @param  string  $service
     *
     * @return RouteRequest
     */
    public function setService(string $service): RouteRequest
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Route
     */
    public function getBody(): Route
    {
        $this->body instanceof Route || $this->body = new Route();

        return $this->body;
    }
}