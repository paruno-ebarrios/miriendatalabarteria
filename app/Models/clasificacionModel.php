<?php
namespace App\Models;

use CodeIgniter\Model;

class ClasificacionModel extends Model
{
    protected $table = 'clasificacion';
    protected $primaryKey = 'clasificacion_id';
    protected $allowedFields = [
        'clasificacion_nombre', 
        'lasificacion_estatus'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}

?>