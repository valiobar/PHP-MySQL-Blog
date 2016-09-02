<?php

class AlbumsController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }
function create(){
    if ($this->isPost) {
        $name = $_POST['album_name'];
        $path = "C:\\xampp\\htdocs\\blog\\content\\images\\";
        $target_file = $path. basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);        
        $uploadOk = 1;
        $imageName = '';
        $private = 0;
        if (isset($_POST['private'])){
        $private =1;
        }
        
        if( basename($_FILES["image"]["name"])!=''){
            $imageName = $_SESSION['username'].$name."_cover.".$imageFileType;
            if (isset($_POST["Create"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {

                    $uploadOk = 1;
                } else {
                    $this->setValidationError("image", "File is not an image.");
                    $uploadOk = 0;
                }
            }
            if (file_exists($target_file)) {
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
                var_dump($target_file);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $path.$imageName)) {
                    echo "The file " . $imageName . " has been uploaded.";
                } else {
                    $this->setValidationError("image", "Sorry, there was an error uploading your file.");

                }
            }

        }

        if ($name == '') {
            $this->setValidationError("username", "Incorrect username");
        }
        
        $albumId = $this->model->register($name,$imageName,$private);



        if ($this->formValid()) {
           
                $this->addInfoMessage("Album created success");
                $this->redirectToUrl(APP_ROOT.'/images'.'/viewAlbum/'.$albumId);
            } else {
                $this->addErrorMessage("Failed to create album");
            }

        }
    }
    
    function viewAlbum($id){
        $album = $this->model->getAlbumById($id);
        if (!$album){
            $this->addErrorMessage("Error:Invalid album Id");
            $this->redirect("");

        }
        $this->album=$album;

        


    }
}
