<?php

class HomeController {
	
    public function handleRequest(){
        // Реализует методы для поиска в БД категорий и новостных заголовков
  //       $content = Category::find();
		// $news = News::findNewsHeader();

		render('home', array(
			'title' => 'Alex.k.developer',
			// 'content' => $content,
			// 'news' => $news
			));

	}	
}