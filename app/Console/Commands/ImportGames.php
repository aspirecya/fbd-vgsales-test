<?php

namespace App\Console\Commands;

use App\Imports\GamesImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportGames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-games';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import games from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->output->title('Starting games import...');
        (new GamesImport())->withOutput($this->output)->import('vgsales.csv');
        $this->output->success('Games imported into the database.');
    }
}
