<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\TestEmail as Email;
use Illuminate\Support\Facades\Mail;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tests Our Email Sending Ability';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to(env('MAIL_DEV_OVERRIDE_ADDRESS'))->send(new Email());

        return 0;
    }
}
