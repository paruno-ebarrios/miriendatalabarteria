<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\RolModel;

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

    public function validarUsuario($nombre, $contrasena)
    {
        $usuario = $this->select('usuario.*, rol.rol_nombre')
                        ->join('rol', 'usuario.rol_id = rol.rol_id')
                        ->where('usuario_nombre', $nombre)
                         ->where('usuario_estatus', 'activo')
                         ->first();

        if ($usuario && password_verify($contrasena, $usuario['usuario_contrasena'])) {
            return $usuario;
        }
        return false;
    }
}

?>