<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/20
 * Time: 11:27
 * Source: BaseRequestAttribute.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Kernel;



use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Class BaseRequestAttribute
 * @Serializer\XmlRoot("Request")
 * @package Zeevin\Sf\Kernel
 */
abstract class BaseRequestAttribute
{

    /**
     * @Serializer\XmlAttribute
     */
    private $lang = 'zh-CN';
    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SerializedName("Head")
     */
    private $head;

    public function __toString()
    {
        return $this->serialize();
    }

    public function serialize($format = 'xml') {

        $serializer = SerializerBuilder::create()->build();

        if ($format == 'form-url-encode') {
            $json = $serializer->serialize($this, 'json');

            return http_build_query(json_decode($json, true));
        }else {
            return $serializer->serialize($this, $format);
        }
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param  string  $lang
     *
     * @return $this
     */
    public function setLang(string $lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param  mixed  $head
     *
     * @return $this
     */
    public function setHead($head)
    {
        $this->head = $head;

        return $this;
    }

}