<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = [
        'usuario_nombre', 
        'usuario_correo', 
        'usuario_contrasena', 
        'usuario_fecha_registro', 
        'usuario_estatus', 
        'rol_id'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = true; // Si deseas usar timestamps
    protected $createdField = 'usuario_fecha_registro';
}

?>