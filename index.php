<?php
/**
 * Created by PhpStorm.
 * User: zhangmiao
 * Date: 2019-06-05
 * Time: 10:30
 */

namespace test;

use Firstphp\ChuanglanSms\Services\ChuanglanSmsService;
use Monolog\Logger;

require "./vendor/autoload.php";


$msg = (new ChuanglanSmsService('lafdu83d', 'db123lafdu8'));
$res = $msg->sendSms('18368028231', 12313);
var_dump($res);

//111222333