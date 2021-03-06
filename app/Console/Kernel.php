<?php

namespace App\Console;

use App\Event;
use Carbon\Carbon;
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
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {

            $events = Event::where(['status_is' => 'Open'])->get();
            if($events->count() > 0){
                foreach($events  as $event){
                    if(Carbon::now()->gt($event->start_date)){
                        $event->update(['status_is' => 'Closed']);
                    }
                }
            }

        })->daily()->at('0:01')->timezone('Africa/Harare'); //->dailyAt('01:00');
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
