<?php

$inputAttributes = $inputAttributes ?? [];

if (array_key_exists('id', $inputAttributes))
{
    if (empty($label['attributes']['for']))
    {
        $label['attributes']['for'] = $inputAttributes['id'];
    }
}

?>
<div<?= $this->renderAttributes(array_merge(['class' => 'form-group'], $attributes ?? []));?>>
    
    <?php if($label ?? false):?>

        <?= $this->insert('form/label', $label);?>

    <?php endif;?>

    <?= $this->section('content');?>

    <?php if($error ?? false):?>

        <?= $this->insert('form/error', $error);?>

    <?php endif;?>

    <?php if($hint ?? false):?>

        <?= $this->insert('form/hint', $hint);?>

    <?php endif;?>

</div>