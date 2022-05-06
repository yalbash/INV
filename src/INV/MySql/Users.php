<?php

namespace INV\MySql;

use mysqli;

class Users extends MySqlService
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
        $result=$this->query('SELECT users.id AS userId, users.name AS userName , departments.name AS departmentName FROM users INNER JOIN departments ON departments.id = users.department_id;');
        return $result;
    }
}