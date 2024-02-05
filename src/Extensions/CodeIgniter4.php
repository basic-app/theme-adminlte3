<?php

namespace Themes\AdminLTE3\Extensions;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class CodeIgniter4 implements ExtensionInterface
{

    protected $engine;

    public function register(Engine $engine)
    {
        $this->engine = $engine;

        $engine->registerFunction('asset', [$this, 'asset']);
        $engine->registerFunction('url', [$this, 'url']);
        $engine->registerFunction('lang', [$this, 'lang']);
    }

    public function asset($var)
    {
        return base_url($var);
    }

    public function url($var)
    {
        return site_url($var);
    }

    public function lang()
    {
        return service('request')->getLocale();;
    }

}