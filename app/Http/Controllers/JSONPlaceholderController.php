<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JSONPlaceholderController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function listUsers()
    {
        $data = [
            'users' => null
        ];

        debug($data);
        return response()->view('json-placeholder.users-list', $data);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function listPosts()
    {
        $data = [
            'posts' => null
        ];

        debug($data);
        return response()->view('json-placeholder.posts-list', $data);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function listComments()
    {
        $data = [
            'comments' => null
        ];

        debug($data);
        return response()->view('json-placeholder.comments-list', $data);
    }
}
