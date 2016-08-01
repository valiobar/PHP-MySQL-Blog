<?php

class HomeController extends BaseController
{
    function index() {
       $this->posts=$this->model->getLastPosts();
        $this->latestposts = array_slice($this->posts,0,3);
    }
	
	function view(int $id) {
      $post = $this->model->getPostById($id);
        if (!$post){
            $this->addErrorMessage("Error:Invalid post Id");
            $this->redirect("");

        }
        $this->post = $post;
    }
}
