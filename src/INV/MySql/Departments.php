<?php

namespace INV\MySql;

use mysqli;

class Departments extends MySqlService
{

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * @return array
     */
    public function loadAll()
    {
        $result=$this->query('SELECT * FROM departments;');
        return $result;
    }
}