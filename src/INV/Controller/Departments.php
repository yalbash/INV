<?php

namespace INV\Controller;

use INV\Controller\AbstractController;

class Departments extends AbstractController
{

    public function loadAll()
    {
        $departments=new \INV\MySql\Departments($this->config);
        $this->render("departments", ['departments' => $departments->loadAll()]);
    }
}