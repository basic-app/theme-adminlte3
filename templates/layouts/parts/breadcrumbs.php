<ol class="breadcrumb float-sm-right">
    <?php foreach($breadcrumbs as $item):?>

        <?php if(!empty($item['link'])):?>
        
            <?php if($item['active'] ?? false):?>
        
                <li class="breadcrumb-item active"><a href="<?= $item['link'];?>"><?= $item['label'];?></a></li>
        
            <?php else:?>
        
                <li class="breadcrumb-item"><a href="<?= $item['link'];?>"><?= $item['label'];?></a></li>
        
            <?php endif;?>
        
        <?php else:?>

            <?php if($item['active'] ?? false):?>
        
                <li class="breadcrumb-item active"><?= $item['label'];?></li>
        
            <?php else:?>
        
                <li class="breadcrumb-item"><?= $item['label'];?></li>
        
            <?php endif;?>

        <?php endif;?>

    <?php endforeach;?>

</ol>