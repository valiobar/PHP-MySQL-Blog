<?php

class PostsModel extends BaseModel
{
    function getAllPosts()
    {
         $statement = self::$db->query("SELECT posts.id, title,content,date,full_name,user_id
from posts LEFT JOIN users ON posts.user_id= users.id ORDER by date DESC ");
    //   var_dump($statement);
         return $statement->fetch_all(MYSQLI_ASSOC);
    }
    function createPost(string $title,string $content,int $user_id):bool
    {
      $statement = self::$db->prepare("INSERT INTO posts (title, content, user_id) VALUES(?,?,?)");
        $statement->bind_param("ssi",$title,$content,$user_id);
        $statement->execute();
        return $statement->affected_rows==1;
    }
    public function getById($id){
        $statement = self::$db->prepare("SELECT * FROM posts WHERE id=?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result=$statement->get_result()->fetch_assoc();
        return $result;
    }
    public function deletePost($id){
        $statement = self::$db->prepare("DELETE FROM posts WHERE id=?");
        $statement->bind_param("i",$id);
        $statement->execute();

        return $statement->affected_rows==1;
    }
}
