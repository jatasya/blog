<?php
namespace Blog\Entity;

class Post extends BaseEntity {

    protected $id;
    protected $title;
    protected $slug;
    protected $date;
    protected $content;
    protected $status;

    protected $comments = array();
    protected $comments_count = 0;

}