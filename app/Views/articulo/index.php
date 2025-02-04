<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<header class="page-header">
    <h2>Artículos</h2>

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

<a type="button" class="mb-xs mt-xs mr-xs btn btn-primary" href="<?=base_url('/articulo/create')?>"><i class="fa fa-plus"></i> nuevo artículo</a>
<div class="table-responsive">
    <table border="1" class="table table-bordered table-striped table-condensed mb-none">
        <thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Código de Barras</th>
				<th>Estatus</th>
				<th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($articulos as $articulo): ?>
            <tr>
				<td><?= $articulo['articulo_id'] ?></td>
                <td><?= $articulo['articulo_nombre'] ?></td>
                <td><?= $articulo['articulo_precio'] ?></td>
                <td><?= $articulo['articulo_codigo_barras'] ?></td>
                <td><?= $articulo['articulo_estatus'] ?></td>
                <td>
                    <a class="mb-xs mt-xs mr-xs btn btn-success" href="<?= base_url('/articulo/edit/'.$articulo['articulo_id']) ?>"><i class="fa fa-pencil"></i>Editar</a>
                    <a class="mb-xs mt-xs mr-xs btn btn-danger" href="<?= base_url('/articulo/delete/'. $articulo['articulo_id']) ?>" onclick="return confirm('¿Está seguro?');"><i class="fa fa-trash"></i>Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>