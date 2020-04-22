<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 17:21
 * Source: RlsInfo.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class RlsInfo
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("rls_errormsg")
     * @Serializer\Type("string")
     */
    private $rlsErrorMsg;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("invoke_result")
     * @Serializer\Type("string")
     */
    private $invokeResult;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("rls_code")
     * @Serializer\Type("string")
     */
    private $rlsCode;

    /**
     * @Serializer\SerializedName("rls_detail")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\RlsDetail")
     */
    private $rlsDetail;

    /**
     * @return mixed
     */
    public function getRlsErrorMsg()
    {
        return $this->rlsErrorMsg;
    }

    /**
     * @return mixed
     */
    public function getRlsCode()
    {
        return $this->rlsCode;
    }

    /**
     * @return mixed
     */
    public function getInvokeResult()
    {
        return $this->invokeResult;
    }

    /**
     * @return RlsDetail
     */
    public function getRlsDetail()
    {
        return $this->rlsDetail;
    }
}