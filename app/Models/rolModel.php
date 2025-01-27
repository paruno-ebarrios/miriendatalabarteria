<?php
namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'rol_id';
    protected $allowedFields = [
        'rol_nombre'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}

?>