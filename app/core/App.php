<?php
 
 namespace LOMU\core;
   
 class App{

      private $api ="";
      private $version ="";
      private $controller ="";
      private $method ="";
      private $params=[];
      function __construct(){

            $this->url();

            $this->render();

      }//end construct  

      function url(){
      
            $queryString = $_SERVER['QUERY_STRING']; 

            if(!empty($queryString)){

                   $url=explode('/',$queryString); 

                   $this->api = (isset($url[0])) ? $url[0] : "";
                   
                   $this->version = (isset($url[1])) ? $url[1] : "";
                   
                   $this->controller = (isset($url[2])) ? $url[2].'Controller' :""; 

                   $this->method = (isset($url[3])) ? $url[3] : "";
            
                   unset( $url[0] , $url[1] , $url[2] , $url[3] );

                   $this->params=array_values($url);
            
            }

      }//url
     
      
      function render(){

            $check=true;

            if($this->api==APICONTROLLERSNAME){

                    if(file_exists(APICONTROLLERSPATH.DS.$this->version)){

                            $this->controller = "LOMU\apicontrollers\\".$this->version."\\".$this->controller;     

                            if(class_exists($this->controller)){
                                       
                                     $this->controller = new $this->controller; 

                                     if(method_exists($this->controller,$this->method)){

                                            call_user_func_array([$this->controller,$this->method],$this->params);
 
                                     }else{

                                            $check=false;

                                    } 

                            }else{

                                   $check=false;   

                            }            
                        

                    }

            }else{

                    $check=false;

            }


            if(!$check){
             
                $this->setErrorData();
            
                call_user_func_array([$this->controller,$this->method],$this->params);   

            }

      }//end render

      private function setErrorData(){             
   
              $this->controller = new ("LOMU\apicontrollers\\error\\Error");

              $this->params = [];

              $this->method = 'notFound';
            
        }

 }//end App


?>