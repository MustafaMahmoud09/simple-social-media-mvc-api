<?php
 
 namespace LOMU\models;
 use Exception;
 use LOMU\core\Model;
 use PDO;

 class UserModel extends Model{
     
         function login($email,$password){

               return $data= parent::connection()->run("select * FROM user WHERE password = ? and email = ?"
                                                                   , [$password,$email])->fetch(PDO::FETCH_ASSOC);

         }//end login

        function register($data){
         
                  try{ 
                        
                        parent::connection()->insert('user',$data);
                  
                        return 1;

                  }catch(Exception){
                      
                        return 0;

                  }
        }//end register 

        function delete($id){
                   
                   parent::connection()->deleteByIds('comment', 'user_id', $id);
                   parent::connection()->deleteByIds('post', 'user_id', $id);;
                   return parent::connection()->deleteById('user', $id);

        }//end delete
        

        function update($data,$id){
                
                  return parent::connection()->update('user',$data,$id); 

        }//end update

    
 }//end UserModel


?>