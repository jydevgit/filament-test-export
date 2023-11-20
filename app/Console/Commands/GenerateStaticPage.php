<?php

namespace App\Console\Commands;

use Spatie\Export\Exporter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class GenerateStaticPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-static-page';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $exporter = App::make(Exporter::class)
        ->cleanBeforeExport(config('export.clean_before_export', false))
        ->crawl(config('export.crawl', true))
        ->paths(['pages/accueil'])
        ->includeFiles(config('export.include_files', []))
        ->excludeFilePatterns(config('export.exclude_file_patterns', []));

        $exporter->export();
    }
}
