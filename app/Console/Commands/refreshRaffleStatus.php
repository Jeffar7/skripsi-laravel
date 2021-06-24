<?php

namespace App\Console\Commands;

use App\Cart;
use App\Raffle;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class refreshRaffleStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:refreshRaffleStatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For refresh raffle status';

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
     * @return int
     */
    public function handle()
    {

        $date = Carbon::now();
        $time = Carbon::now()->toTimeString();

        $running = DB::table('raffles')
            ->whereRaw('"' . $date . '" between `rafflereleasedate` and `raffleclosedate`')
            ->update(['status' => 'running']);

        $not_started = DB::table('raffles')
            ->whereDate('rafflereleasedate', '>', Carbon::now())
            // ->whereTime('rafflereleasedate', '>', Carbon::now()->toTimeString())
            ->update(['status' => 'not_started']);

        $closed = DB::table('raffles')
            ->whereDate('raffleclosedate', '<', Carbon::now())
            // ->whereTime('raffleclosedate', '<', Carbon::now()->toTimeString())
            ->update(['status' => 'closed']);

        Mail::raw("This is automatically generated minute update", function ($message) {
            $message->from('Jeffarmanurung66@gmail.com');
            $message->to('Jeffarmanurung66@gmail.com')->subject('Minute Update');
        });

        $this->info('Minute Update has been send successfully');
    }
}
