<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
 {
    public function index()
 {
        $model = model( NewsModel::class );

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view( 'templates/header', $data )
        . view( 'news/overview' )
        . view( 'templates/footer' );
    }

    public function view( $slug = null )
 {
        $model = model( NewsModel::class );

        $data[ 'news' ] = $model->getNews( $slug );

        if ( empty( $data[ 'news' ] ) ) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException( 'Cannot find the news item: ' . $slug );
        }

        $data[ 'title' ] = $data[ 'news' ][ 'title' ];

        return view( 'templates/header', $data )
        . view( 'news/view' )
        . view( 'templates/footer' );
    }

    public function create()
 {
        $model = model( NewsModel::class );

        if ( $this->request->getMethod() === 'post' && $this->validate( [
            'title' => 'required|min_length[3]|max_length[255]',
            'slug' => 'required|min_length[3]|max_length[25]',
            'body' => 'required',
        ] ) ) {
            $model->save( [
                'title' => $this->request->getPost( 'title' ),
                'slug'  => url_title( $this->request->getPost( 'title' ), '-', true ),
                'body'  => $this->request->getPost( 'body' ),
            ] );
            echo "<script type='text/javascript'>alert('OK, the News created.');</script>";

            return redirect()->route( 'n_base' );
        }

        return view( 'templates/header', [ 'title' => 'Create a news item' ] )
        . view( 'news/create' )
        . view( 'templates/footer' );
    }

    public function delete( $id = 0 ) {
        $model = model( NewsModel::class );
        $model->delete_news( $id );
        echo "<script type='text/javascript'>alert('OK, the News deleted.');</script>";
        return redirect()->route( 'n_base' );
    }

    public function edit( $slug ) {
        $model = model( NewsModel::class );

        $data[ 'news' ] = $model->getNews( $slug );

        if ( empty( $data[ 'news' ] ) ) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException( 'Cannot find the news item: ' . $slug );
        }

        $data[ 'title' ] = 'Edit this item';

        return view( 'templates/header' )
        . view( 'news/edit', $data )
        . view( 'templates/footer' );
    }

    public function update( $id )
 {
        echo "<script type='text/javascript'>alert('inside update');</script>";
        $model = model( NewsModel::class );

        if ( $this->request->getMethod() === 'post' && $this->validate( [
            'title' => 'required|min_length[3]|max_length[255]',
            'slug' => 'required|min_length[3]|max_length[25]',
            'body' => 'required',
        ] ) ) {
            $model->
            update( $id, [
                'title' => $this->request->getPost( 'title' ),
                'slug'  => url_title( $this->request->getPost( 'slug' ), '-', true ),
                'body'  => $this->request->getPost( 'body' ),
            ] );
            echo "<script type='text/javascript'>alert('OK, the News updated');</script>";
            // return redirect( ':'.$_SERVER[ 'SERVER_PORT' ].'/news' );
            return redirect()->route( 'n_base' );

        }

        echo "<script type='text/javascript'>alert('Oops... x3-update-fail!, id='.$id);</script>";
        return redirect()->route( 'n_base' );

    }
}