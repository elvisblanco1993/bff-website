<?php

namespace App\Console\Commands;

use App\Models\Team;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMembershipReminder;
use Illuminate\Support\Facades\Log;

class SendPaymentReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bff:send_payment_email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a reminder to all team members to pay their membership';

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
        $team = Team::all();
        if ($team->count() > 0) {
            foreach ($team as $member) {
                try {
                    Mail::to($member->email)->send(new SendMembershipReminder($member->name));
                    Log::info('Successfully sent reminder to ' . $member->name);
                } catch (\Throwable $th) {
                    Log::error($th);
                }
            }
        }
    }
}
