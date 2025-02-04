<?php
namespace App\Controllers;

use App\Models\ArticuloModel;
use App\Models\ClasificacionModel;

class ArticuloController extends BaseController
{
    protected $articuloModel;
    protected $clasificacionModel;

    public function __construct()
    {
        $this->articuloModel = new ArticuloModel();
        $this->clasificacionModel = new ClasificacionModel();
    }

    // Listar todos los artículos
    public function index()
    {
        $data['articulos'] = $this->articuloModel->findAll();
        return view('articulo/index', $data);
    }

    // Mostrar formulario de creación
    public function create()
    {
        $data['clasificaciones'] = $this->clasificacionModel->findAll();
        return view('articulo/create',$data);
    }

    // Redimensionar imagen a 500x500
    private function resizeImage($file)
    {
        $image = \Config\Services::image()
            ->withFile($file)
            ->resize(500, 500, true, 'auto');

        // Guardar la imagen temporal redimensionada
        $newPath = WRITEPATH . 'uploads/' . $file->getRandomName();
        $image->save($newPath);

        return $newPath;
    }

    // Guardar un artículo
    public function store()
    {
        $foto = $this->request->getFile('articulo_foto');
        $fotoBlob = null;

        if ($foto && $foto->isValid()) {
            // Redimensionar la imagen y convertir a blob
            $resizedPath = $this->resizeImage($foto);
            $fotoBlob = file_get_contents($resizedPath);
            unlink($resizedPath); // Limpiar el archivo temporal
        }

        $this->articuloModel->save([
            'articulo_nombre' => $this->request->getPost('articulo_nombre'),
            'articulo_precio' => $this->request->getPost('articulo_precio'),
            'articulo_codigo_barras' => $this->request->getPost('articulo_codigo_barras'),
            'articulo_estatus' => $this->request->getPost('articulo_estatus'),
            'clasificacion_id' => $this->request->getPost('clasificacion_id'),
            'articulo_foto' => $fotoBlob
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
        $foto = $this->request->getFile('articulo_foto');
        $fotoBlob = null;

        if ($foto && $foto->isValid()) {
            $resizedPath = $this->resizeImage($foto);
            $fotoBlob = file_get_contents($resizedPath);
            unlink($resizedPath);
        }

        $data = [
            'articulo_nombre' => $this->request->getPost('articulo_nombre'),
            'articulo_precio' => $this->request->getPost('articulo_precio'),
            'articulo_codigo_barras' => $this->request->getPost('articulo_codigo_barras'),
            'articulo_estatus' => $this->request->getPost('articulo_estatus'),
            'clasificacion_id' => $this->request->getPost('clasificacion_id'),
        ];

        if ($fotoBlob) {
            $data['articulo_foto'] = $fotoBlob;
        }

        $this->articuloModel->update($id, $data);

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