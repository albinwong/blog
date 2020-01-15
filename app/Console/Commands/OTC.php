<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OTC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'huobiOTC:updated';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Huobi OTC Price Updated Crontab';

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
        $hb = new \App\Http\Controllers\Frontend\HuobiController;
        $hb->otcPrice();
    }
}
