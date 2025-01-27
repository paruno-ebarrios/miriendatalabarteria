<?php
namespace App\Models;

use CodeIgniter\Model;

class ArticuloModel extends Model
{
    protected $table = 'articulo';
    protected $primaryKey = 'articulo_id';
    protected $allowedFields = [
        'articulo_nombre', 
        'articulo_precio', 
        'articulo_codigo_barras', 
        'articulo_estatus', 
        'clasificacion_id', 
        'articulo_foto'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}

?>