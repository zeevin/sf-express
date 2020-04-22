<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:26
 * Source: OrderSearchRequest.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\RequestAttribute\Entity\OrderSearch;
use Zeevin\Sf\Kernel\BaseRequestAttribute;

/**
 * Class OrderSearchRequest
 * @Serializer\XmlRoot("Request")
 * @package Zeevin\Sf\Bsp\RequestAttribute
 */
class OrderSearchRequest extends BaseRequestAttribute
{
    /**
     * @Serializer\XmlAttribute
     */
    protected $service = 'OrderSearchService';

    /**
     * @var OrderSearch
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Entity\OrderSearch")
     * @Serializer\SerializedName("Body")
     */
    protected $body;

    /**
     * @return OrderSearch
     */
    public function getBody()
    {
        $this->body instanceof OrderSearch || $this->body = new OrderSearch();
        return $this->body;
    }

}