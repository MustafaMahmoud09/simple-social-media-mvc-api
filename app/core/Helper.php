<?php
 
 namespace LOMU\core;
 use LOMU\apicontrollers\error\Error; 

 class Helper{

      static function typeDataRespons(){

            header('Access-Control-Allow_Origin: application/json');

            header('Content-Type: application/json');  

      }//end typeDataRespons  

      static function defineMethod($method){

             header('Access-Control-Allow-Method: '.$method);

      }//end defineMethod

     
     static function getDataRequest(){

            $dataRequest = file_get_contents('php://input'); 
                         
            return json_decode($dataRequest,true);

     }//end getDataRequest 


    static function checkDataBaseChange($statusCodeTrue,$check,$action){
               
            if($check==1){
            
                  Response::responseMessage($statusCodeTrue,$action);
        
            }else{

                  Response::responseMessage(300,"not change");  

            }

    }//end checkDataBaseChange 

     static function callFunctionMethodError(){
             
          $instanceError = new Error();     
          $instanceError->errorInMethod();
        
     }//end callFunctionMethodError 


     static function checkDataSelected($statusCodeTrue,$data){

               if(!empty($data)){
                  
                       Response::responseMessage($statusCodeTrue,$data);
                   
               }else{
                      
                      Response::responseMessage(300,"not item selected"); 
                  
               }

     }//end checkDataSelected

 }//end Helper

?>