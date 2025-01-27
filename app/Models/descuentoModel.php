<?php
namespace App\Models;

use CodeIgniter\Model;

class DescuentoModel extends Model
{
    protected $table = 'descuento';
    protected $primaryKey = 'descuento_id';
    protected $allowedFields = [
        'articulo_id', 
        'cantidad_minima', 
        'cantidad_maxima', 
        'porcentaje_descuento'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}

?>