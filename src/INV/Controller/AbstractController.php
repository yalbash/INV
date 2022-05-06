<?php

namespace INV\Controller;


class AbstractController
{
    protected $config;


    public function __construct(array $config)
    {
        $this->config = $config;
    }

    protected function render($file, $data = [])
    {
        include './../templates/index.php';
    }
}
