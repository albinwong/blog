<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        \App\Console\Commands\ListAllCryptocurrencies::class,
        \App\Console\Commands\Alternative::class,
        \App\Console\Commands\AlterNativeTicker::class,
        \App\Console\Commands\OTC::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('ListAllCryptocurrencies:update')->dailyAt('08:30');
        $schedule->command('Alternative:crontab')->dailyAt('08:01');
        $schedule->command('huobiOTC:updated')->everyFiveMinutes();
        $schedule->command('Alternative:ticker')->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
