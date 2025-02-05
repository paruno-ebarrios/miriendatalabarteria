<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<header class="page-header">
    <h2>Editar Artículo</h2>

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
<form  class="form-horizontal form-bordered" action="<?=base_url('/articulo/update/'. $articulo['articulo_id']) ?>" method="post">
    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_nombre">Nombre:</label>
        <div class="col-md-6">
            <input type="text" name="articulo_nombre" class="form-control" value="<?= $articulo['articulo_nombre'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_precio">Precio:</label>
        <div class="col-md-6">
            <input type="number" step="0.01" name="articulo_precio" class="form-control" value="<?= $articulo['articulo_precio'] ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_codigo_barras">Código de Barras:</label>
        <div class="col-md-6">
            <input type="text" name="articulo_codigo_barras" class="form-control" value="<?= $articulo['articulo_codigo_barras'] ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="articulo_estatus">Estatus:</label>
        <div class="col-md-6">
            <select name="articulo_estatus" class="form-control">
                <option value="activo" <?= $articulo['articulo_estatus'] == 'activo' ? 'selected' : '' ?>>Activo</option>
                <option value="inactivo" <?= $articulo['articulo_estatus'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
                <option value="baja" <?= $articulo['articulo_estatus'] == 'baja' ? 'selected' : '' ?>>Baja</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="clasificacion_id">Estatus:</label>
        <div class="col-md-6">
            <select name="clasificacion_id" class="form-control">
            <?php foreach ($clasificaciones as $clasificacion) : ?>
                <option value="<?= $clasificacion['clasificacion_id'] ?>" <?= $clasificacion['clasificacion_id'] == $articulo['clasificacion_id'] ? 'selected' : '' ?>>
                    <?= $clasificacion['clasificacion_nombre'] ?>
                </option>
            <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="rol_id">Foto (dejar vacío si no desea cambiarla):</label>
        <div class="col-md-6">
            <input type="file" name="articulo_foto" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10" style="text-align: right;">
            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-save"></i> Actualizar</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>