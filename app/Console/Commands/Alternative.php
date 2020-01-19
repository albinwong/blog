<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Alternative extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Alternative:crontab';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alternative Crontab Update';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $an = new \App\Http\Controllers\Cli\AlternativeController;
        $an->fgi();
    }
}
