<?php

namespace App\Controllers;
use App\Models\PostModel;

class Posts extends BaseController {
    public function index() {
        $data[ 'title' ] = 'Latest Posts';

        return view( 'templates/header' ).view( 'posts/index', $data ).view( 'templates/footer' );
    }
}

class Post extends BaseController
 {
    function index()
 {

        $postModel = new PostModel();

        $data[ 'posts_data' ] = $postModel->orderBy( 'id', 'DESC' )->paginate( 10 );
        $data[ 'pagination_link' ] = $postModel->pager;

        return view( 'posts', $data );
    }
}

?>