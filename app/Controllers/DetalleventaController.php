<?php
namespace App\Controllers;

use App\Models\DetalleVentaModel;

class DetalleVentaController extends BaseController
{
    protected $detalleVentaModel;

    public function __construct()
    {
        $this->detalleVentaModel = new DetalleVentaModel();
    }

    public function index()
    {
        $data['detalles_venta'] = $this->detalleVentaModel->findAll();
        return view('detalle_venta/index', $data);
    }

    public function create()
    {
        return view('detalle_venta/create');
    }

    public function store()
    {
        $this->detalleVentaModel->save([
            'venta_id' => $this->request->getPost('venta_id'),
            'articulo_id' => $this->request->getPost('articulo_id'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio_unitario' => $this->request->getPost('precio_unitario'),
            'descuento' => $this->request->getPost('descuento')
        ]);

        return redirect()->to('/detalle_venta');
    }

    public function edit($id)
    {
        $data['detalle_venta'] = $this->detalleVentaModel->find($id);
        return view('detalle_venta/edit', $data);
    }

    public function update($id)
    {
        $this->detalleVentaModel->update($id, [
            'venta_id' => $this->request->getPost('venta_id'),
            'articulo_id' => $this->request->getPost('articulo_id'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio_unitario' => $this->request->getPost('precio_unitario'),
            'descuento' => $this->request->getPost('descuento')
        ]);

        return redirect()->to('/detalle_venta');
    }

    public function delete($id)
    {
        $this->detalleVentaModel->delete($id);
        return redirect()->to('/detalle_venta');
    }
}

?>