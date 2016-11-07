<?php

/**
 * Created by PhpStorm.
 * User: hockenburj1
 * Date: 1/12/16
 * Time: 1:14 PM
 */
class Post
{
    public function __construct($postID = 0)
    {
        global $database;
        $this->database = $database;
    }
}