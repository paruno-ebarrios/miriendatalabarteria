<?php
namespace App\Controllers;

use App\Models\RolModel;
use App\Models\UsuarioModel;
use App\Models\RolModelModel;

class UsuarioController extends BaseController
{
    protected $usuarioModel;
    protected $rolModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->rolModel = new RolModel();
    }

    public function index()
    {
        $data['usuarios'] = $this->usuarioModel->findAll();
        return view('usuario/index', $data);
    }

    public function create()
    {
        $data['roles'] = $this->rolModel->findAll();
        return view('usuario/create');
    }

    public function store()
    {
        $this->usuarioModel->save([
            'usuario_nombre' => $this->request->getPost('usuario_nombre'),
            'usuario_correo' => $this->request->getPost('usuario_correo'),
            'usuario_contrasena' => password_hash($this->request->getPost('usuario_contrasena'), PASSWORD_DEFAULT),
            'rol_id' => $this->request->getPost('rol_id'),
            'usuario_estatus' => $this->request->getPost('usuario_estatus')
        ]);

        return redirect()->to('/usuarios');
    }

    public function edit($id)
    {
        $data['usuario'] = $this->usuarioModel->find($id);
        $data['roles'] = $this->rolModel->findAll();
        return view('usuario/edit', $data);
    }

    public function update($id)
    {
        $this->usuarioModel->update($id, [
            'usuario_nombre' => $this->request->getPost('usuario_nombre'),
            'usuario_correo' => $this->request->getPost('usuario_correo'),
            'usuario_estatus' => $this->request->getPost('usuario_estatus'),
            'rol_id' => $this->request->getPost('rol_id')
        ]);

        return redirect()->to('/usuarios');
    }

    public function delete($id)
    {
        $this->usuarioModel->delete($id);
        return redirect()->to('/usuarios');
    }
}

?>