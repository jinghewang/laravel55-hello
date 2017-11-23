<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Woodw\Utils\Helpers\UtilsHelper;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send
                            {user=foo : The ID of the user}
                            {--queue= : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //$arg = $this->argument('user');

        //name
        $name = $this->ask('What is your name?');
        $this->info("your name is:{$name}");

        //password
        $password = $this->secret('What is the password?');
        $this->info("password is {$password}");

        //confirm
        if ($this->confirm('Do you wish to continue?')) {
            $this->info("send email");
        }else{
            $this->info("cancel send");
        }
    }
}
