<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 14:45
 * Source: OrderAddedService.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class OrderAddedService
{
    const COD = 'COD';
    const INSURE = 'INSURE';
    const IN52 = 'IN52';
    const PKFEE = 'PKFEE';
    const IN23 = 'IN23';
    const IN105 = 'IN105';
    const TDELIVERY = 'TDELIVERY';
    const IN91 = 'IN91';
    const IN56 = 'IN56';
    const IN41 = 'IN41';
    const IN99 = 'IN99';
    const XCOD = 'XCOD';
    const NOTICE = 'NOTICE';
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("value")
     * @Serializer\Type("string")
     */
    private $value;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("value1")
     * @Serializer\Type("string")
     */
    private $value1;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("value2")
     * @Serializer\Type("string")
     */
    private $value2;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("value3")
     * @Serializer\Type("string")
     */
    private $value3;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("value4")
     * @Serializer\Type("string")
     */
    private $value4;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  mixed  $name
     *
     * @return OrderAddedService
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param  mixed  $value
     *
     * @return OrderAddedService
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * @param  mixed  $value1
     *
     * @return OrderAddedService
     */
    public function setValue1($value1)
    {
        $this->value1 = $value1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue2()
    {
        return $this->value2;
    }

    /**
     * @param  mixed  $value2
     *
     * @return OrderAddedService
     */
    public function setValue2($value2)
    {
        $this->value2 = $value2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue3()
    {
        return $this->value3;
    }

    /**
     * @param  mixed  $value3
     *
     * @return OrderAddedService
     */
    public function setValue3($value3)
    {
        $this->value3 = $value3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue4()
    {
        return $this->value4;
    }

    /**
     * @param  mixed  $value4
     *
     * @return OrderAddedService
     */
    public function setValue4($value4)
    {
        $this->value4 = $value4;

        return $this;
    }
}