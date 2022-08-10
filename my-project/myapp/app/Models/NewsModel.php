<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
 {
    protected $table = 'news';
    protected $allowedFields = [ 'title', 'slug', 'body' ];

    public function getNews( $slug = false )
 {
        if ( $slug === false ) {
            return $this->orderBy( 'id', 'desc' )->findAll();
        }

        return $this->where( [ 'slug' => $slug ] )->first();
    }

    public function delete_news( $id ) {
        $this->where( 'id', $id )->delete();
        return true;
    }

    public function edit_news( $id ) {
        // $this->where( 'id', $id )->delete();
        echo $id;
        return true;
    }
}