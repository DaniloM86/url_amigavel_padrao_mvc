<?php

    class Core{

        private $url;
        private $controller;
        private $acao= 'index';
        private $parametro = array();

        public function __construct()
        {


        }
        public function start($request)
        {
            if(isset($request['url'])){
                
                $this->url = explode('/',$request['url']);
                $this->controller = ucfirst($this->url[0]).'controller';
                 array_shift($this->url);

                if(isset($this->url[0]) && $this->url != ''){  
                    $this->acao = $this->url[0];
                    array_shift($this->url);
                }   
                    if(isset($this->url[0]) && $this->url != ''){
                    $this->parametro = $this->url;
                      
                    }

            }
            else{

                $this->controller = 'HomeController';
                $this->acao = 'index';
            }    

          return  call_user_func(array (new $this->controller, $this->acao), $this->parametro);
        }
    }


?>