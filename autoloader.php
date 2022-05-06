<?php

spl_autoload_register(static function ($name) {
    $path = str_replace('\\', '/', $name);
    require_once 'src/' . $path . '.php';
});