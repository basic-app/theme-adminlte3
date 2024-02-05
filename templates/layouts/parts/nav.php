<?php

foreach($mainMenu as $key => $value)
{
    if (!empty($value['items']))
    {
        foreach($value['items'] as $k => $v)
        {
            if ($v['active'] ?? false)
            {
                if (!array_key_exists('active', $mainMenu[$key]))
                {
                    $mainMenu[$key]['active'] = true;
                }
            }
        }
    }
}

?>
<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
    <?php foreach($mainMenu as $key => $value):?>
        <?php if(array_key_exists('items', $value)):?>
            <?= $this->insert('layouts/parts/nav_category', ['category' => $value]);?>
        <?php else:?>
            <?= $this->insert('layouts/parts/nav_item', ['item' => $value]);?>
        <?php endif;?>
    <?php endforeach;?>
    </ul>
</nav>
<!-- /.sidebar-menu -->