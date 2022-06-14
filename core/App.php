<?php
    class App {
        public function __construct(){
            $url = $this->parseUrl();
            // var_dump($url);
            $controllerName = "{$url[0]}Controller";//userController
            // echo "<br>";
            // echo $controllerName;
            require_once "controllers/$controllerName.php";
            $controller = new $controllerName;
            // $controller->account("HI");//userController->account("hi")
            $methodName = $url[1];//account
            // echo $controller->index()."</br>";
            // echo $controller->hello("87");
            // echo "<br>".$methodName."</br>";
            unset($url[0]);
            // var_dump($url);
            // echo "<br>";
            unset($url[1]);
            // var_dump($url);
            $params = $url ? array_values($url) : Array();
            // echo "<br>";
            // var_dump($params);
            $guide = Array($controller,$methodName);
            // echo "<br>";
            call_user_func_array($guide,$params);// userController->account("profile");
        }
        public function parseUrl(){
            if(isset($_GET["url"])){
                $url = rtrim($_GET["url"]);//移除字串右側的空白字元 /user/account/profile
                $url = explode("/",$url);//把字串打散為陣列
                var_dump($url);
                return $url;
            }
        }
    }