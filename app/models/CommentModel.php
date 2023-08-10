<?php
 
 namespace LOMU\models;
 use Exception;
 use LOMU\core\Model;
 use PDO;

 class CommentModel extends Model{
     
         function selectCommentPostByIdPost($id){

               return $data= parent::connection()->run("select * FROM comment WHERE post_id=?"
                                                                   , [$id])->fetch(PDO::FETCH_ASSOC);

         }//end login

        function addCommentToPost($data){
         
                  try{ 
                        
                        parent::connection()->insert('comment',$data);
                  
                        return 1;

                  }catch(Exception){
                      
                        return 0;

                  }
        }//end register 

        function delete($id){

                   return parent::connection()->deleteById('comment', $id);

        }//end delete
        

        function update($data,$id){
                
                  return parent::connection()->update('comment',$data,$id); 

        }//end update

    
 }//end UserModel


?>