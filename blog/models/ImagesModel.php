<?php
class ImagesModel extends BaseModel
{
    public function getAlbumById($id){
        $statement = self::$db->query("SELECT * FROM albums where id=$id");
        return $statement->fetch_assoc();
    }
    public function getAlbumImages($id){
        $statement = self::$db->query("SELECT image_name FROM images where album_id=$id");
        return $statement->fetch_row();
    }
    public function addImage(string $imageName,string $description,int $albumId){
        $statement  = self::$db->prepare("INSERT INTO images(image_name,description,album_id) VALUE (?,?,?)");

        $statement->bind_param("ssi",$imageName,$description,$albumId);

        $statement->execute();

        if ($statement->affected_rows != 1){
            return false;
        }
        $image_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
        return $image_id;
    }
}