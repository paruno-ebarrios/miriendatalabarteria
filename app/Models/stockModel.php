<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table = 'stock';
    protected $primaryKey = 'stock_id';
    protected $allowedFields = [
        'articulo_id', 
        'localidad_id', 
        'stock_maximo', 
        'stock_minimo', 
        'stock_actual'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}
?>