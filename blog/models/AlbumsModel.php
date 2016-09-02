<?php



class AlbumsModel extends BaseModel
{
    public  function register(string $name,string $image,int $private)
    {


        $statement  = self::$db->prepare("INSERT INTO albums(album_name,cover,private,user_id) VALUE (?,?,?,?)");

        $statement->bind_param("ssii",$name, $image,$private,$_SESSION['user_id']);

        $statement->execute();

        if ($statement->affected_rows != 1){
            return false;
        }
        $album_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
        return $album_id;

    }
   

    public function getAlbumById($id){
        $statement = self::$db->query("SELECT * FROM albums where id=$id");
        return $statement->fetch_assoc();
    }
    public function getAlbumImages($id){
        $statement = self::$db->query("SELECT * FROM images where album_id=$id");
        return $statement->fetch_all(MYSQLI_ASSOC);

    }
}