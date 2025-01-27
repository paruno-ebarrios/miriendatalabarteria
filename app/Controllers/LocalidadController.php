<?php
namespace App\Controllers;

use App\Models\LocalidadModel;

class LocalidadController extends BaseController
{
    protected $localidadModel;

    public function __construct()
    {
        $this->localidadModel = new LocalidadModel();
    }

    public function index()
    {
        $data['localidades'] = $this->localidadModel->findAll();
        return view('localidad/index', $data);
    }

    public function create()
    {
        return view('localidad/create');
    }

    public function store()
    {
        $this->localidadModel->save([
            'localidad_nombre' => $this->request->getPost('localidad_nombre'),
            'localidad_direccion' => $this->request->getPost('localidad_direccion'),
            'localidad_estatus' => $this->request->getPost('localidad_estatus')
        ]);

        return redirect()->to('/localidad');
    }

    public function edit($id)
    {
        $data['localidad'] = $this->localidadModel->find($id);
        return view('localidad/edit', $data);
    }

    public function update($id)
    {
        $this->localidadModel->update($id, [
            'localidad_nombre' => $this->request->getPost('localidad_nombre'),
            'localidad_direccion' => $this->request->getPost('localidad_direccion'),
            'localidad_estatus' => $this->request->getPost('localidad_estatus')
        ]);

        return redirect()->to('/localidad');
    }

    public function delete($id)
    {
        $this->localidadModel->delete($id);
        return redirect()->to('/localidad');
    }
}

?>