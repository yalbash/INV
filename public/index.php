<?php

use INV\Application;

require_once '../autoloader.php';

$config = require '../config/_default_.inc.php';
$app = new Application($config);
$app->run();