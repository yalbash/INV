<?php

namespace INV\Controller;

use INV\Controller\AbstractController;

class Users extends AbstractController
{

    public function loadAll()
    {
        $users=new \INV\MySql\Users($this->config);
        $this->render("users", ['users' => $users->loadAll()]);
    }
}