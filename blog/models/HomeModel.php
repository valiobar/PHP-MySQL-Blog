<?php

class HomeModel extends BaseModel
{
    function getLastPosts(int $maxCount = 5)
    {
         $statement = self::$db->query("SELECT posts.id, title,content,date,full_name
from posts LEFT JOIN users ON posts.user_id= users.id ORDER by date DESC limit 5");
    //   var_dump($statement);
         return $statement->fetch_all(MYSQLI_ASSOC);
    }
     function getPostById(int $id)
     {
         $statement = self::$db->query("SELECT posts.id, title,content,date,full_name
from posts LEFT JOIN users ON posts.user_id= users.id WHERE posts.id = $id");
         var_dump($statement);
       //  $statement->bind_param("i",$id);

     // $result= $statement->get_result()->fetch_assoc();
         return $statement->fetch_assoc();
     }
}
