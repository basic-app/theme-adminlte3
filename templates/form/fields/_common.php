<?php

$attributes = $attributes ?? [];

$inputAttributes = $inputAttributes ?? [];

$hintAttributes = $hintAttributes ?? [];

if (!array_key_exists('class', $attributes))
{
    $attributes['class'] = 'form-control';
}

if ($error)
{
    $attributes['class'] .= ' is-invalid';
}

if (!empty($inputAttributes['id']))
{
    if (!array_key_exists('id', $hintAttributes))
    {
        $hintAttributes['id'] = $inputAttributes['id'] . '-hint';
    }
}

if (!array_key_exists('aria-describedby', $attributes))
{
    if (array_key_exists('id', $hintAttributes))
    {
        $attributes['aria-describedby'] = $hintAttributes['id'];
    }
}