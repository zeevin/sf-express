<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/18
 * Time: 16:58
 * Source: BaseClient.php
 * Project: sf-express
 */


namespace Zeevin\Sf\Kernel;


use DusanKasan\Knapsack\Collection;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use JMS\Serializer\SerializerBuilder;

abstract class BaseClient
{
    /**
     * @var string
     */
    protected $client = 'lib-sf-client';
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $endPoint = 'bsp';
    protected $service;
    protected $response;
    protected $httpErrors = [];
    protected $result;
    /**
     * @var ServiceContainer
     */
    protected $app;
    /**
     * @var Collection
     */
    protected $config;

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app->config;
    }

    public function request(string $body)
    {
        $body = trim($body);
        $method = strtoupper($this->getMethod());
//        var_dump(['xml' => $body, 'verifyCode' => $this->sign($body)]);exit;
        try {
            $this->response = $this->getHttpClient()->request(
                $method,
                $this->getUri(),
                [
                    'form_params' => ['xml' => $body, 'verifyCode' => $this->sign($body)],
                    'verify'      => false,
                    'headers'     => $this->getHeaders(),
                ]
            );
        } catch (ClientException $e) {
            $this->httpErrors = [
                'statusCode'   => $e->getCode(),
                'reasonPhrase' => $e->getResponse()->getReasonPhrase(),
            ];
        }

        return $this;
    }

    public function getResult($format = 'object')
    {
        $body = (string)$this->response->getBody();
//        if (empty($this->httpErrors)) {
//            return (string)$this->response->getBody();
//        }

        if($format == 'object') {
            $object = 'Zeevin\Sf\\'.ucfirst($this->endPoint).'\ResponseAttribute\\'.ucfirst($this->getService()).'Response';
            $this->result = $this->deserialize($body,$object,'xml');
        }elseif ($format == 'xml') {
            $this->result = $body;
        }

        return $this->result;
    }

    public function sign($xml)
    {
        $string = $xml.$this->config->get('sf')['checkword'];

        return base64_encode(md5(mb_convert_encoding($string, 'UTF-8', mb_detect_encoding($string)),true));

    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getService()
    {
        if (!$this->service) {

        }

        return ucfirst($this->service).'Service';
    }

    protected function getHttpClient(): Client
    {
        return $this->app['http_client'];
    }

    protected function getUri()
    {
        $sfConfig = $this->config->get('sf');

        return $sfConfig['uri'].$sfConfig['endPoint'][$this->endPoint];
    }

    protected function getHeaders()
    {
        return ['User-Agent' => $this->client, 'Content-Type' => 'application/x-www-form-urlencoded;charset=utf-8'];
    }

    protected function deserialize($data, $object, $format)
    {
        $serializer = SerializerBuilder::create()->build();
        $object = class_exists($object) ? $object : BaseResponseAttribute::class;

        return $serializer->deserialize($data, $object, $format);
    }
}