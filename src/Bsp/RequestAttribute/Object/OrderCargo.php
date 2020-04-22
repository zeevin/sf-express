<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 14:37
 * Source: OrderCargo.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class OrderCargo
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("count")
     * @Serializer\Type("integer")
     */
    private $count;

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
     * @return OrderCargo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param  mixed  $count
     *
     * @return OrderCargo
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}