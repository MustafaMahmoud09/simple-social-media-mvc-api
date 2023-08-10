<?php
  
  namespace LOMU\apicontrollers\v1;
  use LOMU\core\Helper;
  use LOMU\models\UserModel;

  class UserController{
         
         private UserModel $userModel;

         function __construct(){
 
                $this->userModel= new UserModel();
                Helper::typeDataRespons();  

         }//end construct 

         function delete(){
             
                  if($_SERVER['REQUEST_METHOD']=="DELETE"){
                          
                         Helper::defineMethod("DELETE");
                         
                         $data = Helper::getDataRequest();   

                         $checkDeleted= $this->userModel->delete($data['id']); 
                        
                         Helper::checkDataBaseChange(202,$checkDeleted,"data deleted from database");

                  }else {
                
                         Helper::callFunctionMethodError();

                  } 

         }//end delete
     
         function login(){
                   
                   if($_SERVER['REQUEST_METHOD']=='POST'){

                             Helper::defineMethod('POST');
                              
                             $data = Helper::getDataRequest();

                             $data =$this->userModel->login($data['email'],$data['password']);
                  
                             Helper::checkDataSelected(200,$data);

                    }else{
                          
                           Helper::callFunctionMethodError();

                   }
                            
                     
                      

         }//end login

         function update(){
                      
                    if($_SERVER['REQUEST_METHOD']=='PUT'){

                           Helper::defineMethod("PUT");

                           $data = Helper::getDataRequest(); 

                           $dataChange = $data['data'];

                           $id = [
                     
                                'id'=>$data['id']
                     
                           ];

                           $checkUpdate = $this->userModel->update($dataChange,$id);

                           Helper::checkDataBaseChange(203,$checkUpdate,'Data Update');

                    }else {
        
                           Helper::callFunctionMethodError();  

                    }   
   
         }//end update

         function register(){
                
                if($_SERVER['REQUEST_METHOD']=='POST'){

                         Helper::defineMethod('POST');    
                
                         $data = Helper::getDataRequest();    
             
                         $checkAdd = $this->userModel->register($data);

                         Helper::checkDataBaseChange(201,$checkAdd,'data inserted in database');
                         
                }else{
                
                         Helper::callFunctionMethodError();

                }
                    
                      
         }//end register
          

  }//end UserController



?>