<?php

$active = $category['active'] ?? false;

?>
<li class="nav-item has-treeview<?= $active ? ' menu-open' : '';?>">
    <a href="#" class="nav-link<?= $active ? ' active' : '';?>">
        <?php if(!empty($category['icon'])):?>
            <?= $this->insert('icon', $category['icon']);?>
        <?php endif;?> 
        <p>
            <?= $category['label'];?>
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <?php foreach($category['items'] as $k => $v):?>
            <?= $this->insert('layouts/parts/nav_item', ['item' => $v]);?>
        <?php endforeach;?>
    </ul>
</li>