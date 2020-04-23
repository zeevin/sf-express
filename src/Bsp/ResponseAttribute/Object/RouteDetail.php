<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 17:29
 * Source: RouteDetail.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class RouteDetail
 * @package Zeevin\Sf\Bsp\ResponseAttribute\Object
 */
class RouteDetail
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accept_time")
     */
    private $acceptTime;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accept_address")
     */
    private $acceptAddress;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("remark")
     */
    private $remark;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("opcode")
     */
    private $opcode;

    /**
     * @return mixed
     */
    public function getAcceptTime()
    {
        return $this->acceptTime;
    }

    /**
     * @return mixed
     */
    public function getAcceptAddress()
    {
        return $this->acceptAddress;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @return mixed
     */
    public function getOpcode()
    {
        return $this->opcode;
    }
}