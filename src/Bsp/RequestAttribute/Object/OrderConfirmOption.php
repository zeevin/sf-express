<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 15:16
 * Source: OrderConfirmOption.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class OrderConfirmOption
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     */
    private $weight;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("volume")
     */
    private $volume;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("return_tracking")
     */
    private $returnTracking;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("express_type")
     */
    private $expressType;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("children_nos")
     */
    private $childrenNos;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("waybill_size")
     */
    private $waybillSize;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("float")
     * @Serializer\SerializedName("is_gen_eletric_pic")
     */
    private $isGenElectricPic;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param  mixed  $weight
     *
     * @return OrderConfirmOption
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param  mixed  $volume
     *
     * @return OrderConfirmOption
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnTracking()
    {
        return $this->returnTracking;
    }

    /**
     * @param  mixed  $returnTracking
     *
     * @return OrderConfirmOption
     */
    public function setReturnTracking($returnTracking)
    {
        $this->returnTracking = $returnTracking;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpressType()
    {
        return $this->expressType;
    }

    /**
     * @param  mixed  $expressType
     *
     * @return OrderConfirmOption
     */
    public function setExpressType($expressType)
    {
        $this->expressType = $expressType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildrenNos()
    {
        return $this->childrenNos;
    }

    /**
     * @param  mixed  $childrenNos
     *
     * @return OrderConfirmOption
     */
    public function setChildrenNos($childrenNos)
    {
        $this->childrenNos = $childrenNos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWaybillSize()
    {
        return $this->waybillSize;
    }

    /**
     * @param  mixed  $waybillSize
     *
     * @return OrderConfirmOption
     */
    public function setWaybillSize($waybillSize)
    {
        $this->waybillSize = $waybillSize;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsGenElectricPic()
    {
        return $this->isGenElectricPic;
    }

    /**
     * @param  mixed  $isGenElectricPic
     *
     * @return OrderConfirmOption
     */
    public function setIsGenElectricPic($isGenElectricPic)
    {
        $this->isGenElectricPic = $isGenElectricPic;

        return $this;
    }
}