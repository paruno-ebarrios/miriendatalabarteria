<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetalleVentaModel extends Model
{
    protected $table = 'detalle_venta';
    protected $primaryKey = 'detalle_venta_id';
    protected $allowedFields = [
        'venta_id', 
        'articulo_id', 
        'cantidad', 
        'precio_unitario', 
        'descuento'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}

?>