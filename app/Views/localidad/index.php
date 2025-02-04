<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<header class="page-header">
    <h2>Localidades</h2>

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

<a type="button" class="mb-xs mt-xs mr-xs btn btn-primary" href="<?= base_url('/localidad/create') ?>"><i class="fa fa-plus"></i> nueva localidad</a>
<div class="table-responsive">
    <table border="1" class="table table-bordered table-striped table-condensed mb-none">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($localidades as $localidad): ?>
            <tr>
                <td><?= $localidad['localidad_id'] ?></td>
                <td><?= $localidad['localidad_nombre'] ?></td>
                <td><?= $localidad['localidad_direccion'] ?></td>
                <td><?= $localidad['localidad_estatus'] ?></td>
                <td>
                    <a class="mb-xs mt-xs mr-xs btn btn-success" href="<?= base_url('/localidad/edit/'.$localidad['localidad_id']) ?>"><i class="fa fa-pencil"></i>Editar</a>
                    <a class="mb-xs mt-xs mr-xs btn btn-danger" href="<?= base_url('/localidad/delete/'. $localidad['localidad_id']) ?>" onclick="return confirm('¿Está seguro?');"><i class="fa fa-trash"></i>Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>