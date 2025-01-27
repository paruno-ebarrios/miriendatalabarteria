<?php
namespace App\Controllers;

use App\Models\DescuentoModel;

class DescuentoController extends BaseController
{
    protected $descuentoModel;

    public function __construct()
    {
        $this->descuentoModel = new DescuentoModel();
    }

    public function index()
    {
        $data['descuentos'] = $this->descuentoModel->findAll();
        return view('descuento/index', $data);
    }

    public function create()
    {
        return view('descuento/create');
    }

    public function store()
    {
        $this->descuentoModel->save([
            'articulo_id' => $this->request->getPost('articulo_id'),
            'cantidad_minima' => $this->request->getPost('cantidad_minima'),
            'cantidad_maxima' => $this->request->getPost('cantidad_maxima'),
            'porcentaje_descuento' => $this->request->getPost('porcentaje_descuento')
        ]);

        return redirect()->to('/descuento');
    }

    public function edit($id)
    {
        $data['descuento'] = $this->descuentoModel->find($id);
        return view('descuento/edit', $data);
    }

    public function update($id)
    {
        $this->descuentoModel->update($id, [
            'articulo_id' => $this->request->getPost('articulo_id'),
            'cantidad_minima' => $this->request->getPost('cantidad_minima'),
            'cantidad_maxima' => $this->request->getPost('cantidad_maxima'),
            'porcentaje_descuento' => $this->request->getPost('porcentaje_descuento')
        ]);

        return redirect()->to('/descuento');
    }

    public function delete($id)
    {
        $this->descuentoModel->delete($id);
        return redirect()->to('/descuento');
    }
}

?>