<?php

class PostsController extends BaseController
{
   function onInit()
   {
      $this->authorize();
   }

    function index()
    {

       $this->posts=$this->model->getAllPosts();
        
    }

    function create()
    {
        if ($this->isPost) {
            $title=$_POST['post_title'];
            if (strlen($title)<1){
                $this->setValidationError("post_title","Invalid Title");
            }
            $content = $_POST['post_content'];
            if (strlen($title)<1){
                $this->setValidationError("post_content","Post Content cannot be empty");
            }
            if ($this->formValid()){
                $userId = $_SESSION['user_id'];
                if($this->model->createPost($title,$content,$userId)){
                    $this->addInfoMessage("Post created");
                    $this->redirect("posts");
                }else{
                    $this->addErrorMessage("Error:cannot create post");
                }
            }
        }

    }
	public function delete(int $id)
    {
    if ($this->isPost){
        if($this->model->deletePost($id)){
            $this->addInfoMessage("Post Deleted");
        }else{
            $this->addErrorMessage("Error:cannot delete post");
        }
        $this->redirect("posts");
      } else{
        $post = $this->model->getById($id);
        if (!$post){
            $this->addErrorMessage("Post does not exist");
            $this->redirect("posts");
        }
        $this->post=$post;
    }
    }
}
