<?php


class ImagesController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }
   
   
   
    function viewAlbum($id)
    {
        $album = $this->model->getAlbumById($id);
        if (!$album) {
            $this->addErrorMessage("Error:Invalid album Id");
            $this->redirect("");

        }
        $this->album=$album;
        
       
        $this->images = $this->model->getAlbumImages($id);

        if ($this->isPost) {
            $description = $_POST['image_desc'];
            $path = "C:\\xampp\\htdocs\\blog\\content\\images\\";
            $target_file = $path. basename($_FILES["imageAdd"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $uploadOk = 1;

            $imageName = basename($_FILES["imageAdd"]["name"]);
            if (isset($_POST["Add_Image"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {

                    $uploadOk = 1;
                } else {
                    $this->setValidationError("image", "File is not an image.");
                    $uploadOk = 0;
                }
            }
            if (file_exists($imageName)) {
                $this->setValidationError("image", "Sorry, file already exists.");
                $uploadOk = 0;
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                $this->setValidationError("image", "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                $this->addErrorMessage("Sorry, your file was not uploaded.");

            } else {

                if (move_uploaded_file($_FILES["imageAdd"]["tmp_name"], $path.$imageName)) {
                    echo "The file " . $imageName . " has been uploaded.";
                } else {
                    $this->setValidationError("image", "Sorry, there was an error uploading your file.");

                }
            }

            $imageId = $this->model->addImage($imageName,$description,$album['id']);
            if ($this->formValid()) {
                $this->addInfoMessage("Image upload success");

            } else {
                $this->addErrorMessage("Failed to add image");
            }

        }
    }
}
