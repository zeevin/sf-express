<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 14:02
 * Source: Error.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Kernel;


use JMS\Serializer\Annotation as Serializer;

class Error
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("code")
     */
    private $code;
    /**
     * @Serializer\XmlValue
     * @Serializer\Type("string")
     * @Serializer\SerializedName("value")
     */
    private $message;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}