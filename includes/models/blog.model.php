<?php

class Post {
	public static function PostBase($arr = array()){

        global $db;

        if (empty($arr)) {

            $st = $db->prepare("SELECT * FROM blog");

        } else {
            throw new Exception("Unsupported property!");
        }

        $st->execute($arr);

        return ($st->fetchAll(PDO::FETCH_CLASS, "Post"));
    
	}	
}