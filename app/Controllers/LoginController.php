<?php
namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/index');
    }

    public function autenticar()
    {
        $session = session();
        $usuarioModel = new UsuarioModel();

        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasenia');

        $usuario = $usuarioModel->validarUsuario($usuario, $contrasena);

        if ($usuario) {
            $sessionData = [
                'usuario_id' => $usuario['usuario_id'],
                'usuario_nombre' => $usuario['usuario_nombre'],
                'usuario_correo' => $usuario['usuario_correo'],
                'logged_in' => true
            ];
            $session->set($sessionData);
            return redirect()->to(base_url('articulo'));
        } else {
            return redirect()->back()->with('error', 'Credenciales inválidas');
        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login/index'));
    }
}

?>