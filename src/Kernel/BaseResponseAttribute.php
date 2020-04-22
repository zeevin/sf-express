<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 15:46
 * Source: BaseResponseAttribute.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Kernel;


use JMS\Serializer\Annotation as Serializer;

class BaseResponseAttribute
{
    /**
     * @Serializer\Type("integer")
     */
    protected $statusCode;
    /**
     * @Serializer\Type("string")
     */
    protected $reasonPhrase;

    /**
     * @Serializer\SerializedName("Head")
     * @Serializer\Type("string")
     */
    protected $head;
    /**
     * @Serializer\SerializedName("ERROR")
     * @Serializer\Type("Zeevin\Sf\Kernel\Error")
     */
    protected $error;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return mixed
     */
    public function getReasonPhrase()
    {
        return $this->reasonPhrase;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->error->getCode();
    }

    /**
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->error->getMessage();
    }

    /**
     * @return mixed
     */
    public function getHead()
    {
        return $this->head;
    }
}