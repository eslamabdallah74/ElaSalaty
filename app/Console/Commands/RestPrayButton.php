<?php

namespace App\Console\Commands;

use App\Models\Prayers;
use Illuminate\Console\Command;

class RestPrayButton extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rest:pray';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rest pray button to 0 every 24H';

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
    // Rest pray button
    public function handle()
    {

        $prayers =  Prayers::where('clicked' , 1)->get();
        foreach ($prayers as $prayer)
        {
            $prayer->update([
                'clicked' => 0,
            ]);
        }
        // return Command::SUCCESS;
    }
}
