<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace Themes\AdminLTE3;

class Theme extends BaseTheme
{

    public function __construct(array $directories = [], $fileExtension = 'php')
    {
        parent::__construct(
            array_merge(
                ['AdminLTE3' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates'],
                $directories
            ), 
            $fileExtension
        );
    }

}