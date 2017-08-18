<?php

namespace App\Console\Commands;

use App\Models\Plan;
use Braintree_Plan;
use Illuminate\Console\Command;

class SyncPlans extends Command
{
    protected $signature = 'braintree:sync-plans';
    protected $description = 'Sync with online plans on Braintree';

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
        // Empty table
        Plan::truncate();

        // Get plans from Braintree
        $braintreePlans = Braintree_Plan::all();

        // uncomment the line below to dump the plans when running the command
        // var_dump($braintreePlans);

        // Iterate through the plans while populating our table with the plan data
        foreach ($braintreePlans as $braintreePlan) {
            $plan = new Plan();
            $plan->name = $braintreePlan->name;
            $plan->slug = str_slug($braintreePlan->name);
            $plan->braintree_plan = $braintreePlan->id;
            $plan->cost = $braintreePlan->price;
            $plan->description = $braintreePlan->description;
            $plan->save();
        }
    }
}
