<?php

class UsersController extends BaseController
{
    public function register()
    {
		if ($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $fullName = $_POST['full_name'];

            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


                if ($username == '') {
                $this->setValidationError("username", "Incorrect username");
            }
            if ($password != $password_confirm) {
                $this->setValidationError("password_confirm", "Passoword do not match");
            }
            if (strlen($password) < 5) {
                $this->setValidationError("password", "Passoword is invalid");
            }
            $userId = $this->model->register($username, $password, $fullName,$image);


            if ($this->formValid()) {
                if ($userId !== false) {
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['username'] = $username;
                    $_SESSION['picture'] = $this->model->getUserImage($userId);
                    $this->addInfoMessage("Registration success");
                    $this->redirect("");
                } else {
                    $this->addErrorMessage("Registration failed");
                }

            }
        }
    }

    public function login()
    {
        if ($this->isPost){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userId = $this->model->login($username,$password);
            if ($userId!==false){
                $_SESSION['username']=$username;
                $_SESSION['user_id']=$userId;
                $_SESSION['picture']=$this->model->getUserImage($userId);

                $this->addInfoMessage("Login Successful");
                $this->redirect("");
            }else{
                $this->addErrorMessage("Username or Password incorrect");
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->redirect("");
    }
    function index()
    {
        $this->authorize();
        $this->users=$this->model->getUsers();
    }
}
