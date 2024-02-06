<?php include(__DIR__ . '/_common.php');?>

<?php $this->layout('form/group', [
    'inputAttributes' => $attributes ?? [],
    'label' => [
        'content' => $label ?? null,
        'attributes' => $labelAttributes ?? []
    ],
    'hint' => [
        'content' => $hint ?? null,
        'attributes' => $hintAttributes ?? []
    ],
    'error' => [
        'content' => $error ?? null,
        'attributes' => $errorAttributes ?? []
    ],
    'attributes' => $groupAttributes ?? []
]);?>

<?= $this->tag('input', $value ?? '', array_merge([
    'type' => 'text'
], $attributes ?? []));?>