<?php

namespace App\Controllers;

class Pages extends BaseController {
    public function index() {
        // $data[ 'title' ] = ucfirst( $page );
        return view( 'templates/header' ).view( 'pages/welcome' ).view( 'templates/footer' );
        // return view( 'welcome_message' );
    }

    public function viewpage( $page = 'wtf' ) {

        $data[ 'title' ] = ucfirst( $page );
        if ( !file_exists( APPPATH.'Views/pages/'.$page.'.php' ) ) {
            // echo "<script type='text/javascript'>alert('!!! Page not found: $page');</script>";
            // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            return view( 'templates/header' ).view( 'pages/wtf', $data ).view( 'templates/footer' );
        }
        // echo "<script type='text/javascript'>alert('Yes, it is — $page');</script>";
        return view( 'templates/header' ).view( 'pages/'.$page, $data ).view( 'templates/footer' );
    }
}