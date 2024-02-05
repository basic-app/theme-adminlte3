<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <?= $this->insert('layouts/parts/search');?>
    <ul class="navbar-nav ml-auto">
        <?php foreach($userMenu ?? [] as $key => $value):?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= $value['url'];?>" class="nav-link"><?= $value['label'];?></a>
            </li>
        <?php endforeach;?>
    </ul>
</nav>
<!-- /.navbar -->