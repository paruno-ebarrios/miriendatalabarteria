<?php
namespace App\Controllers;

use App\Models\ArticuloModel;

class ArticuloController extends BaseController
{
    protected $articuloModel;

    public function __construct()
    {
        $this->articuloModel = new ArticuloModel();
    }

    // Listar todos los artículos
    public function index()
    {
        $data['articulos'] = $this->articuloModel->findAll();
        return view('articulo/index1', $data);
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('articulo/create');
    }

    // Guardar un artículo
    public function store()
    {
        $this->articuloModel->save([
            'articulo_nombre' => $this->request->getPost('articulo_nombre'),
            'articulo_precio' => $this->request->getPost('articulo_precio'),
            'articulo_codigo_barras' => $this->request->getPost('articulo_codigo_barras'),
            'articulo_estatus' => $this->request->getPost('articulo_estatus'),
            'clasificacion_id' => $this->request->getPost('clasificacion_id')
        ]);

        return redirect()->to('/articulo');
    }

    // Mostrar un artículo
    public function show($id)
    {
        $data['articulo'] = $this->articuloModel->find($id);
        return view('articulo/show', $data);
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $data['articulo'] = $this->articuloModel->find($id);
        return view('articulo/edit', $data);
    }

    // Actualizar un artículo
    public function update($id)
    {
        $this->articuloModel->update($id, [
            'articulo_nombre' => $this->request->getPost('articulo_nombre'),
            'articulo_precio' => $this->request->getPost('articulo_precio'),
            'articulo_codigo_barras' => $this->request->getPost('articulo_codigo_barras'),
            'articulo_estatus' => $this->request->getPost('articulo_estatus'),
            'clasificacion_id' => $this->request->getPost('clasificacion_id')
        ]);

        return redirect()->to('/articulo');
    }

    // Eliminar un artículo
    public function delete($id)
    {
        $this->articuloModel->delete($id);
        return redirect()->to('/articulo');
    }
}

?>