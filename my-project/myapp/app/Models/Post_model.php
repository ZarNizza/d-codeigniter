<?php
//26:16
namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
 {
    protected $DBGroup = 'ci-group';
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [ 'title', 'slug', 'body' ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
