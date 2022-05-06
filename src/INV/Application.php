<?php


namespace INV;

use INV\Controller\Departments;
use INV\Controller\Users;

class Application
{
    private $config;

    /**
     * Application constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     *
     */
    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $routes = [
            '/departments/' => [Departments::class, 'loadAll'],
            '/users/' => [Users::class, 'loadAll'],
        ];
        foreach ($routes as $route => $function) {
            $routeOptions = explode(':', $route) + ['/', 'any'];
            $regex = '@^' . $routeOptions[0] . '$@';
            if (($routeOptions[1] === $method || $routeOptions[1] === 'any') && preg_match($regex, $uri, $matches)) {
                $class = $function[0];
                $method = $function[1];
                $controller = new $class($this->config);
                $controller->$method($matches);
            }
        }
    }
}