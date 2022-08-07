<?php

namespace App\Controllers;

class Posts extends BaseController {
    public function index() {
        $data[ 'title' ] = 'Latest Posts';

        return view( 'templates/header' ).view( 'posts/index', $data ).view( 'templates/footer' );
    }

}