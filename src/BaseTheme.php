<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace Themes\AdminLTE3;

use League\Plates\Engine;
use League\Plates\Template\ResolveTemplatePath\ThemeResolveTemplatePath;
use League\Plates\Template\Theme;

abstract class BaseTheme extends Engine
{

    public function __construct(array $directories = [], $fileExtension = 'php')
    {
        parent::__construct(null, $fileExtension);
    
        $themes = [];

        foreach($directories as $key => $path)
        {
            $themes[] = Theme::new($path, $key);
        }

        $this->setResolveTemplatePath(new ThemeResolveTemplatePath(Theme::hierarchy($themes)));    
    }

} 