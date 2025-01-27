<?php
namespace App\Controllers;

use App\Models\StockModel;

class StockController extends BaseController
{
    protected $stockModel;

    public function __construct()
    {
        $this->stockModel = new StockModel();
    }

    public function index()
    {
        $data['stocks'] = $this->stockModel->findAll();
        return view('stock/index', $data);
    }

    public function create()
    {
        return view('stock/create');
    }

    public function store()
    {
        $this->stockModel->save([
            'articulo_id' => $this->request->getPost('articulo_id'),
            'localidad_id' => $this->request->getPost('localidad_id'),
            'stock_maximo' => $this->request->getPost('stock_maximo'),
            'stock_minimo' => $this->request->getPost('stock_minimo'),
            'stock_actual' => $this->request->getPost('stock_actual')
        ]);

        return redirect()->to('/stock');
    }

    public function edit($id)
    {
        $data['stock'] = $this->stockModel->find($id);
        return view('stock/edit', $data);
    }

    public function update($id)
    {
        $this->stockModel->update($id, [
            'articulo_id' => $this->request->getPost('articulo_id'),
            'localidad_id' => $this->request->getPost('localidad_id'),
            'stock_maximo' => $this->request->getPost('stock_maximo'),
            'stock_minimo' => $this->request->getPost('stock_minimo'),
            'stock_actual' => $this->request->getPost('stock_actual')
        ]);

        return redirect()->to('/stock');
    }

    public function delete($id)
    {
        $this->stockModel->delete($id);
        return redirect()->to('/stock');
    }
}

?>