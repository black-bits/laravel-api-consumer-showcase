<?php

namespace App\Http\Controllers;

use App\ApiConsumers\JSONPlaceholder\JSONPlaceholder;

/**
 * Class JSONPlaceholderController
 * @package App\Http\Controllers
 */
class JSONPlaceholderController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function listUsers()
    {
        $data = [
            'users' => JSONPlaceholder::User()->all()
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
            'posts' => JSONPlaceholder::Post()->all()
        ];

        debug($data);
        return response()->view('json-placeholder.posts-list', $data);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function listComments($post)
    {
        $post = JSONPlaceholder::Post()->where('id', $post)->first();

        $data = [
            'comments' => $post->comments(),
            'post'     => $post
        ];

        debug($data);
        return response()->view('json-placeholder.comments-list', $data);
    }
}
