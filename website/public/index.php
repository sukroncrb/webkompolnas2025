<?php

ini_set('memory_limit', '-1');
session_start();
date_default_timezone_set("Asia/Bangkok");

use Abiesoft\Resource\App;

require_once __DIR__.'/../vendor/autoload.php';

$app = new App;

$app->start();