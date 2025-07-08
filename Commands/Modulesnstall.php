<?php

namespace IM1\ModulesInstaller\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class ModulesInstall extends BaseCommand
{
    protected $group       = 'im1';
    protected $name        = 'im1:modules';
    protected $description = 'CRUD HMVC IM1';

    public function run(array $params)
    {
        CLI::newLine();

        CLI::write(str_pad('Modules IM1', 85, ' ', STR_PAD_BOTH), 'yellow');
        CLI::write(str_pad('& much more!', 85, ' ', STR_PAD_BOTH), 'light_green');
        CLI::write('');

        CLI::newLine();

        CLI::write("1. Start", 'white');
        CLI::newLine();

        $version = CLI::prompt("Pilih (1) untuk mula CRUD Modules");

        if ($version === '1') {
            $this->start();
        } else {
            CLI::error("❌ Versi belum disokong.");
        CLI::newLine();

        }
    }

    protected function start(): void
    {
    }

}