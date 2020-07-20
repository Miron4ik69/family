<?php 


class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new Router;
        require $file;
        return $router;
    }

    public function get($uri, $controller) 
    {

        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType) 
    {

        if(array_key_exists($uri, $this->routes[$requestType])) {
           
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
         throw new Exception('Страница не найдена по данному URI.');
    }

    protected function callAction($controller, $action) 
    {   
        $controller = new $controller;
        if(! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} не реагирует на {$action} действие"
            );
        }

        return $controller->$action();

    }

}