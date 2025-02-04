<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<header class="page-header">
    <h2>Nueva Localidad</h2>

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
<form class="form-horizontal form-bordered" action="<?=base_url('/localidad/store')?>" method="post">
    <div class="form-group">
        <label class="col-md-3 control-label" for="localidad_nombre">Nombre:</label>
        <div class="col-md-6">
            <input type="text" name="localidad_nombre" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="localidad_direccion">Dirección:</label>
        <div class="col-md-6">
            <input type="text" name="localidad_direccion" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="localidad_estatus">Estatus:</label>
        <div class="col-md-6">
            <select name="localidad_estatus" class="form-control">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10" style="text-align: right;">
            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>