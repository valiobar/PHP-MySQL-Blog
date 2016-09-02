<?php
class ImagesModel extends BaseModel
{

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