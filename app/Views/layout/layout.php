<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<section role="main" class="content-body">
    <?= $this->renderSection('content') ?>
</section>

<?= $this->include('layout/footer') ?>