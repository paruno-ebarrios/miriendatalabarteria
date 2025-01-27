<?php
namespace App\Models;

use CodeIgniter\Model;

class LocalidadModel extends Model
{
    protected $table = 'localidad';
    protected $primaryKey = 'localidad_id';
    protected $allowedFields = [
        'localidad_nombre', 
        'localidad_direccion', 
        'localidad_estatus'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}

?>