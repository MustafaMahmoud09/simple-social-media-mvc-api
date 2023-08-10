<?php

  namespace LOMU\apicontrollers\error;
  use LOMU\core\Helper;
  use LOMU\core\Response;
  
  class Error{
       
        function __construct(){

                Helper::typeDataRespons();

        }//end construct  

        function notFound(){
             
                 Response::responseMessage(404,"not found");  

        }//end notFound 

        function errorInMethod(){

                 Response::responseMessage(300,"error in http request method");   

        }//end errorInMethod

  }//end Error


?>