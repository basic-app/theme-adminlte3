<?php

$active = $item['active'] ?? false;

?>
<li class="nav-item">
    <a href="<?= $item['url'];?>" class="nav-link<?= $active ? ' active' : '';?>">
        <?php if(!empty($item['icon'])):?>
            <?= $this->insert('icon', $item['icon']);?>
        <?php endif;?>                
        <p>
            <?= $item['label'];?>
            <?php if(!empty($item['badge'])):?>
                <?= $this->insert('badge', $item['badge']);?>
            <?php endif;?>
        </p>
    </a>
</li>