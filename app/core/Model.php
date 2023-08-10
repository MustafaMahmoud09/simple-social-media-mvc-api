<?php

  namespace LOMU\core;
  use Dcblogdev\PdoWrapper\Database;
  class Model{
      
          protected function connection(){
            // make a connection to mysql here
                $options = [
                    'username' => USERNAME,
                    'database' => DBNAME,
                    'password' => PASSWORD,
                    'type' => TYPE,
                    'charset' => 'utf8',
                    'host' => HOST,
                    'port' => PORT
            ];
            
            return new Database($options);
               
        }//end connection

  }//end Model
?>