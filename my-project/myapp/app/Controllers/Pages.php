<?php

namespace App\Controllers;

// class Pages extends BaseController {
//     public function index() {
//         return view( 'templates/header' ).view( 'pages/welcome' ).view( 'templates/footer' );
//     }

//     public function vanilla() {
//         return view( 'pages/vanilla' );
//     }

//     public function viewpage( $page = 'wtf' ) {

//         $data[ 'title' ] = ucfirst( $page );
//         if ( !file_exists( APPPATH.'Views/pages/'.$page.'.php' ) ) {
//             // echo "<script type='text/javascript'>alert('!!! Page not found: $page');</script>";
//             // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//             return view( 'templates/header' ).view( 'pages/wtf', $data ).view( 'templates/footer' );
//         }
//         return view( 'templates/header' ).view( 'pages/'.$page, $data ).view( 'templates/footer' );
//     }
// }

namespace App\Controllers;

class Pages extends BaseController
 {
    public function index()
 {
        return view( 'pages/welcome' );
    }

    public function view( $page = 'home' )
 {
        // ...
    }
}