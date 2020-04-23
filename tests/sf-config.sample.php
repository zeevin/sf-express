<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/20
 * Time: 09:25
 * Source: sf-config.php
 * Project: sf-express
 */

return [
    'http' => [

    ],
    'sf' => [
        'clientcode' => 'CJSCY',
        'checkword' => 'xxx',
        'uri' => 'http://bsp-oisp.sf-express.com/',
        'custid' =>'xxx',
        'pay_method'=>1,
        'endPoint' => [
            'bsp' => 'bsp-oisp/sfexpressService'
        ],
        'from' => [
            'company' => 'xxx限公司',
            'contact' => '张三',
            'tel' => '0531-88888888',
            'mobile' => '13333333333',
            'province' => '山东省',
            'city' => '济南市',
            'county' => '历下区',
            'address' => 'xxx小区1-1-111'
        ]
    ]
];