<?php

namespace Themes\AdminLTE3\Publishers;

use CodeIgniter\Publisher\Publisher as BasePublisher;
use Config\Publisher as PublisherConfig;

class Publisher extends BasePublisher
{
    /**
     * Tell Publisher where to get the files.
     * Since we will use Composer to download
     * them we point to the "vendor" directory.
     *
     * @var string
     */
    protected $source = VENDORPATH . 'almasaeed2010' . DIRECTORY_SEPARATOR . 'adminlte';

    /**
     * FCPATH is always the default destination,
     * but we may want them to go in a sub-folder
     * to keep things organized.
     *
     * @var string
     */
    protected $destination = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'adminlte3';

    /**
     * Makes destination directory.
     */
    public function __construct(?string $source = null, ?string $destination = null)
    {
        if (!is_dir($this->destination))
        {
            mkdir($this->destination, 0755, true);
        }

        parent::__construct($source, $destination);
    }

    /**
     * Use the "publish" method to indicate that this
     * class is ready to be discovered and automated.
     */
    public function publish(): bool
    {
        return $this->wipe()
            ->addPath('plugins')
            ->addPath('dist')
            ->removePattern('*.txt')
            ->removePattern('*.js.flow')
            ->removePattern('*.less')
            ->removePattern('*.ts')
            ->removePattern('*.editorconfig')
            ->removePattern('*.md')
            ->removePattern('*.npmignore')
            ->removePattern('LICENSE')
            ->merge(true);
    }

}