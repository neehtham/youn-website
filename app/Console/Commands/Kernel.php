<?php

namespace App\Console\Commands;

use App\Console\Commands\DeleteTempUploadedFiles;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command(DeleteTempUploadedFiles::class)->daily();
    }

    // ...
}
