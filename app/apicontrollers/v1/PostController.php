<?php
  
  namespace LOMU\apicontrollers\v1;
  use LOMU\core\Helper;
  use LOMU\models\PostModel;
  use LOMU\models\UserModel;

  class PostController{
         
         private PostModel $postModel;

         function __construct(){
 
                $this->postModel= new PostModel();
                Helper::typeDataRespons();  

         }//end construct 

         function delete(){
             
                  if($_SERVER['REQUEST_METHOD']=="DELETE"){
                          
                         Helper::defineMethod("DELETE");
                         
                         $data = Helper::getDataRequest();   

                         $checkDeleted= $this->postModel->delete($data['id']); 
                        
                         Helper::checkDataBaseChange(202,$checkDeleted,"data deleted from database");

                  }else {
                
                         Helper::callFunctionMethodError();

                  } 

         }//end delete
     
         function selectAllPost(){
                   
                   if($_SERVER['REQUEST_METHOD']=='POST'){

                             Helper::defineMethod('POST');
                              
                             $data = Helper::getDataRequest();

                             $data =$this->postModel->select();
                  
                             Helper::checkDataSelected(200,$data);

                    }else{
                          
                           Helper::callFunctionMethodError();

                   }
                            
                     
                      

         }//end selectAllPost

         function update(){
                      
                    if($_SERVER['REQUEST_METHOD']=='PUT'){

                           Helper::defineMethod("PUT");

                           $data = Helper::getDataRequest(); 
                              
                          $dataChange = $data['data'];
                        
                           $id = [
                     
                                'id'=>$data['id']
                     
                           ];

                           $checkUpdate = $this->postModel->update($dataChange,$id);

                           Helper::checkDataBaseChange(203,$checkUpdate,'Data Update');

                    }else {
        
                           Helper::callFunctionMethodError();  

                    }   
   
         }//end update

         function insertData(){
                
                if($_SERVER['REQUEST_METHOD']=='POST'){

                         Helper::defineMethod('POST');    
                
                         $data = Helper::getDataRequest();    
             
                         $checkAdd = $this->postModel->insertDataPost($data);

                         Helper::checkDataBaseChange(201,$checkAdd,'data inserted in database');
                         
                }else{
                
                         Helper::callFunctionMethodError();

                }
                    
                      
         }//end register
          

  }//end UserController



?>