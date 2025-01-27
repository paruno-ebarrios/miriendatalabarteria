<?php
namespace App\Controllers;

use App\Models\ClasificacionModel;

class ClasificacionController extends BaseController
{
    protected $clasificacionModel;

    public function __construct()
    {
        $this->clasificacionModel = new ClasificacionModel();
    }

    public function index()
    {
        $data['clasificaciones'] = $this->clasificacionModel->findAll();
        return view('clasificacion/index', $data);
    }

    public function create()
    {
        return view('clasificacion/create');
    }

    public function store()
    {
        $this->clasificacionModel->save([
            'clasificacion_nombre' => $this->request->getPost('clasificacion_nombre'),
            'lasificacion_estatus' => $this->request->getPost('lasificacion_estatus')
        ]);

        return redirect()->to('/clasificacion');
    }

    public function edit($id)
    {
        $data['clasificacion'] = $this->clasificacionModel->find($id);
        return view('clasificacion/edit', $data);
    }

    public function update($id)
    {
        $this->clasificacionModel->update($id, [
            'clasificacion_nombre' => $this->request->getPost('clasificacion_nombre'),
            'lasificacion_estatus' => $this->request->getPost('lasificacion_estatus')
        ]);

        return redirect()->to('/clasificacion');
    }

    public function delete($id)
    {
        $this->clasificacionModel->delete($id);
        return redirect()->to('/clasificacion');
    }
}

?>