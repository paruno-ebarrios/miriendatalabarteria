<?php
namespace App\Models;

use CodeIgniter\Model;

class VentaModel extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'venta_id';
    protected $allowedFields = [
        'venta_folio', 
        'venta_fecha', 
        'usuario_id', 
        'localidad_id', 
        'venta_total'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = true; // Si deseas usar timestamps
    protected $createdField = 'venta_fecha';
}

?>