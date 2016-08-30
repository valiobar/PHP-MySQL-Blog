<?php

class UsersModel extends BaseModel
{

    public function login(string $username,string $password)
    {
       $statement=self::$db->prepare("SELECT id,password_hash from users WHERE  username = ?");
        $statement->bind_param("s",$username);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        if(password_verify($password,$result['password_hash'])){
            return $result['id'];
        }
        return false;
    }


    public  function register(string $username,string $password,string $full_name, $image)
    {

      $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $statement  = self::$db->prepare("INSERT INTO users(username, password_hash, full_name,avatar) VALUE (?,?,?,?)");
        $statement->bind_param("sssb",$username,$password_hash,$full_name,$null);
        $statement->send_long_data(3, $image);
        $statement->execute();

        if ($statement->affected_rows != 1){
            return false;
        }
        $user_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
        return $user_id;

    }
    function getUsers():array
    {
    $statement = self::$db->query("SELECT * FROM users ORDER BY username");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
   function getUserImage($id){
       $stmt = self::$db->prepare("SELECT avatar FROM users WHERE id=?");
       $stmt->bind_param("i", $id);

       $stmt->execute();
       $stmt->store_result();

       $stmt->bind_result($image);
       $stmt->fetch();

       header("Content-Type: image/jpeg");
       return $image;


   }
}
