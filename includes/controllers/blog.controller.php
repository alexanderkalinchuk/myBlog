<?php

class BlogController {
	public function handleRequest(){
		$post = Post::PostBase();
		
		render("post", array(
			"title"=>"Blog",
			"post"=>$post));
	}
}

