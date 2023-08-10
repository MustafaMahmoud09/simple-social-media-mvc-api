<?php
 
 namespace LOMU\models;
 use Exception;
 use LOMU\core\Model;
 use PDO;

 class PostModel extends Model{
     
         function select(){

               return $data= parent::connection()->run("select * FROM post"
                                                         , [])->fetch(PDO::FETCH_ASSOC);

         }//end login

        function insertDataPost($data){
         
                  try{ 
                        
                        parent::connection()->insert('post',$data);
                  
                        return 1;

                  }catch(Exception){
                      
                        return 0;

                  }
        }//end register 

        function delete($id){
                  
                   parent::connection()->deleteByIds('comment', 'post_id', $id);;
                   return parent::connection()->deleteById('post', $id);

        }//end delete
        

        function update($data,$id){
                
                  return parent::connection()->update('post',$data,$id); 

        }//end update

    
 }//end UserModel


?>