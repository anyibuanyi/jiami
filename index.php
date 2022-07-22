<?php

use Xuyi\Jiami\JiamiTest;

header('content-type:text/html;charset=utf-8');

include  './vendor/autoload.php';

$var  = (new JiamiTest())->test();

die(var_dump($var));