<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace Themes\AdminLTE3\Publishers;

use CodeIgniter\Publisher\Publisher as BasePublisher;
use Config\Publisher as Config;

class Publisher extends BasePublisher
{

    protected $source = VENDORPATH . 'almasaeed2010' . DIRECTORY_SEPARATOR . 'adminlte';

    protected $destination = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'adminlte3';

    public function __construct(?string $source = null, ?string $destination = null)
    {
        if (!is_dir($this->destination))
        {
            mkdir($this->destination, 0755, true);
        }

        $config = config(Config::class);

        $originalRestrictions = $config->restrictions[FCPATH];

        $config->restrictions[FCPATH] = str_replace('#\.', '#LICENSE|\.', $config->restrictions[FCPATH]);
        $config->restrictions[FCPATH] = str_replace(')$#', '|txt)$#', $config->restrictions[FCPATH]);

        parent::__construct($source, $destination);

        $config->restrictions[FCPATH] = $originalRestrictions;
    }

    public function publish(): bool
    {
        return $this->wipe()
            ->addPath('plugins')
            ->addPath('dist')
            ->removePattern('*.js.flow')
            ->removePattern('*.less')
            ->removePattern('*.ts')
            ->removePattern('*.editorconfig')
            ->removePattern('*.md')
            ->removePattern('*.npmignore')
            ->merge(true);
    }

}