<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<header class="page-header">
    <h2>Crear Articulo</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="<?=base_url('home')?>">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Inicio</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<form class="form-horizontal form-bordered" action="<?=base_url('/articulo/store')?>" method="post">
    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_nombre">Nombre:</label>
        <div class="col-md-6">
            <input type="text" name="articulo_nombre" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_precio">Precio:</label>
        <div class="col-md-6">
            <input type="number" step="0.01" name="articulo_precio" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_codigo_barras">Código de Barras:</label>
        <div class="col-md-6">
            <input type="text" name="articulo_codigo_barras" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="usuario_estatus">Estatus:</label>
        <div class="col-md-6">
            <select name="usuario_estatus" class="form-control">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                <option value="baja">Baja</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="clasificacion_id">Clasificación:</label>
        <div class="col-md-6">
            <select name="clasificacion_id" class="form-control">
            <?php foreach ($clasificaciones as $clasificacion) : ?>
                <option value="<?= $clasificacion['clasificacion_id'] ?>"><?= $clasificacion['clasificacion_nombre'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_foto">Foto:</label>
        <div class="col-md-6">
            <input type="file" name="articulo_foto" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10" style="text-align: right;">
            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>