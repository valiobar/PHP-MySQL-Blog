<?php


class ImagesController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }
   
   
    function addImage($id)
    {
        if ($this->isPost) {
            $description = $_POST['image_desc'];
            $path = "C:\\xampp\\htdocs\\blog\\content\\images\\";
            $target_file = $path. basename($_FILES["imageAdd"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $uploadOk = 1;



                if (isset($_POST["Add_Image"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {

                        $uploadOk = 1;
                    } else {
                        $this->setValidationError("image", "File is not an image.");
                        $uploadOk = 0;
                    }
                }

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    $this->setValidationError("image", "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                    $uploadOk = 0;
                }
            if (file_exists($target_file)) {
                $this->setValidationError("image", "Sorry, file already exists.");
                $uploadOk = 0;
            }
                if ($uploadOk == 0) {
                    $this->addErrorMessage("Sorry, your file was not uploaded.");

                } else {
                    var_dump($target_file);
                    if (move_uploaded_file($_FILES["imageAdd"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["imageAdd"]["name"]) . " has been uploaded.";
                    } else {
                        $this->setValidationError("image", "Sorry, there was an error uploading your file.");

                    }
                }




            if (strlen($description)>400){
                $this->setValidationError("Abou you",  "TheDEsription is too long it must be less then 350 symbols");
            }





            if ($this->formValid()) {

                    $this->addInfoMessage("Upload success");
                $userId = $this->model->addImage(basename($_FILES["imageAdd"]["name"]), $description, $id);
                    $this->redirectToUrl(APP_ROOT.'/albums/viewAlbum/'.$id);
                } else {
                    $this->addErrorMessage("Registration failed");
                }

            }
        }

}
