<?php

namespace App\Console;

use Curfle\Console\Schedule;
use Curfle\Essence\Application;
use Curfle\Essence\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Register events, commands and functions that shall be executed in the future.
     * 
     * @param Schedule $schedule
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command("inspire")->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->loadFromDirectory(__DIR__ . "/Commands");

        require base_path('routes/console.php');
    }
}