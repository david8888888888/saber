<?php
/**
 * Copyright: Swlib
 * Author: Twosee <twose@qq.com>
 * Date: 2018/4/15 上午12:09
 */

use Swlib\Saber;

require __DIR__ . '/../vendor/autoload.php';

go(function () {
    [$json, $xml, $html] = Saber::list([
        'uri' => [
            'http://httpbin.org/get',
            'http://www.w3school.com.cn/example/xmle/note.xml',
            'http://httpbin.org/html'
        ]
    ]);
    var_dump($json->getParsedJson());
    var_dump($json->getParsedJsonObject());
    var_dump($xml->getParsedXml());
    var_dump($html->getParsedHtml()->getElementsByTagName('h1')->item(0)->textContent);
});