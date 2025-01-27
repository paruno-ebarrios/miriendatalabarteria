<?php
namespace App\Controllers;

use App\Models\VentaModel;

class VentaController extends BaseController
{
    protected $ventaModel;

    public function __construct()
    {
        $this->ventaModel = new VentaModel();
    }

    public function index()
    {
        $data['ventas'] = $this->ventaModel->findAll();
        return view('venta/index', $data);
    }

    public function create()
    {
        return view('venta/create');
    }

    public function store()
    {
        $this->ventaModel->save([
            'venta_folio' => $this->request->getPost('venta_folio'),
            'venta_fecha' => $this->request->getPost('venta_fecha'),
            'usuario_id' => $this->request->getPost('usuario_id'),
            'localidad_id' => $this->request->getPost('localidad_id'),
            'venta_total' => $this->request->getPost('venta_total')
        ]);

        return redirect()->to('/venta');
    }

    public function edit($id)
    {
        $data['venta'] = $this->ventaModel->find($id);
        return view('venta/edit', $data);
    }

    public function update($id)
    {
        $this->ventaModel->update($id, [
            'venta_folio' => $this->request->getPost('venta_folio'),
            'venta_fecha' => $this->request->getPost('venta_fecha'),
            'usuario_id' => $this->request->getPost('usuario_id'),
            'localidad_id' => $this->request->getPost('localidad_id'),
            'venta_total' => $this->request->getPost('venta_total')
        ]);

        return redirect()->to('/venta');
    }

    public function delete($id)
    {
        $this->ventaModel->delete($id);
        return redirect()->to('/venta');
    }
}

?>