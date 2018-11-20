<?php
namespace App\Controller;

use App\Controller\AppController;

class PostController extends AppController
{

    public function index()
    {
    	$this->loadModel("Posts");

    	$posts = $this->Posts->find();

    	$posts = $this->paginate($posts);

    	$a_posts = [];
    	foreach ($posts as $key => $post) {
    		$post->data_extenso = $this->dataExtenso($post->created);
    		$a_posts[$key] = $post;
    	}

    	$posts = $a_posts;

    	// die;

        $this->set(compact('posts'));

    	$this->render("index","blog");
    }

    public function post($friendly_link)
    {
    	$this->loadModel("Posts");

    	$post = $this->Posts->find()
    		->where(['friendly_link'=>$friendly_link])
    		->first();

    	$post->data_extenso = $this->dataExtenso($post->created);

    	$this->set('post', $post);

    	$this->render("post","blog");

    }
}