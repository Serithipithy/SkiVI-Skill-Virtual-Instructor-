<?php
class App{
    protected $controller='home';
    protected $method='index';

    protected $params=[];

    public function _construct(){
        $url=$this->parseUrl();
        if(isset($url[0])&&file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php')){
            $this->controller=$url[0];
            unset($url[0]);

        }
        require_once __DIR__ . '/../controllers' . $this->controller . '.php';

        $this->controller=new $this->controller();

        if(isset($url[1]) && method_exists($this->controller,$url[1])){
            $this->method=$url[1];
            unset($url[1]);
        }
        $this->params=$url ? array_values($url):[];
        call_user_func_array([$this->controller,$this->method],$this->params);

    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            $trimmedUrl=rtrim($_GET['url'],'/');
            $sanitizedUrl=filter_var($trimmedUrl,FILTER_SANITIZE_URL);

            return explode('/',$sanitizedUrl);
        }
        return 0;
    }
}
