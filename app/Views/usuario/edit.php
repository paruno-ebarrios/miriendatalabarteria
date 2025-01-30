<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<header class="page-header">
    <h2>Editar Usuario</h2>

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
<form  class="form-horizontal form-bordered" action="<?=base_url('/usuarios/update/'. $usuario['usuario_id']) ?>" method="post">
<div class="form-group">
        <label class="col-md-3 control-label" for="usuario_nombre">Nombre:</label>
        <div class="col-md-6">
            <input type="text" name="usuario_nombre" class="form-control" value="<?= $usuario['usuario_nombre'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="usuario_correo">Correo:</label>
        <div class="col-md-6">
            <input type="email" name="usuario_correo" class="form-control" value="<?= $usuario['usuario_correo'] ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="usuario_estatus">Estatus:</label>
        <div class="col-md-6">
            <select name="usuario_estatus" class="form-control">
                <option value="activo" <?= $usuario['usuario_estatus'] == 'activo' ? 'selected' : '' ?>>Activo</option>
                <option value="inactivo" <?= $usuario['usuario_estatus'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="rol_id">Rol:</label>
        <div class="col-md-6">
            <input type="number" name="rol_id" class="form-control" value="<?= $usuario['rol_id'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10" style="text-align: right;">
            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-save"></i> Actualizar</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>