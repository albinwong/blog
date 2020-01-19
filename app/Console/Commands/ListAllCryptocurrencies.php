<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ListAllCryptocurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ListAllCryptocurrencies:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Table List All Cryptocurrencies Data Daily Update';

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
        //
        $Cryptocurrency = new \App\Http\Controllers\Cli\HuobiController;
        $Cryptocurrency->listAllCryptoCurrencies();
    }
}
