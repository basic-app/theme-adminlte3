<div class="card">
    <?php if($title ?? false):?>
    <div class="card-header">
        <h5 class="m-0"><?= $title;?></h5>
    </div>
    <?php endif;?>
    <div class="card-body">
        <?= $body;?>
        <?php
        /*
        <h6 class="card-title">Special title treatment</h6>

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        */?>
    </div>
</div>