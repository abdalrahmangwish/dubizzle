<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Traits\showElments;
use App\Trait\Response_Trait;

class PostController extends Controller
{
    use Response_Trait;

///--> this is  without login-> evrey sho whithout login

    use showElments;
    public function getProperty()
    {
        $posts = $this->getData(Post::class);
        $list = $posts->postType->properties;
        return $this->get_response($list, 200, 'this is the properties list');
    }
    public function getJob()
    {
        $posts = $this->getData(Post::class);
        $list = $posts->postType->communities->jobs;
        return $this->get_response($list, 200, 'this is the jobs list');
    }

}