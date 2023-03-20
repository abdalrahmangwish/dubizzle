<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\showElments as TraitsShowElments;
use Illuminate\Http\ResponseTrait;

class ShowPost extends Controller
{

    use ResponseTrait;
    use TraitsShowElments;
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
