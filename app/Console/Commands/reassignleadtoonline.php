<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Crm;
use App\Models\UserData as Profile;
use Illuminate\Support\Facades\DB;

class reassignleadtoonline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Reassign:LeadtoOnline';

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
        $limit = date('Y-m-d', strtotime("-8 days"));
        $limit = $limit . ' 00:00:00';

        $limit1 = date('Y-m-d', strtotime("-20 days"));
        $limit1 = $limit1 . ' 00:00:00';

        // case 1: assign_to is not null and online
        // case 2:
        //Commented the Free user Join by Sagar. No need to join with Free user Table
        $x = DB::table('leads')
        ->where('leads.is_done', 0)
        ->where('assign_by', '!=', 'online')
        ->where('assign_to', '!=', 'online')
        ->where('leads.followup_call_on', '<', $limit)
        ->update(['assign_to' => 'online', 'assign_by' => 'online']);


        /*$y = DB::table('leads')
        ->where('leads.is_done', 0)
        ->where('assign_by', '!=', 'online')
        ->where('assign_to', '!=', 'online')
        ->where('leads.updated_at', '<', $limit)
        ->update(['assign_to' => 'online', 'assign_by' => 'online']);*/

        $z = DB::table('leads')
        ->where('leads.is_done', 2)
        ->update(['assign_to' => 'online', 'assign_by' => 'online']);

        $incomplete_leads = DB::table('incomplete_leads')
        ->where('call_counts', '<', 2)
        ->where('isDelete', 0)
        ->whereRaw('channel like "%Facebook%"')
        ->whereNotNull('request_by_at')
        ->whereNull('request_by')
        ->update(['request_by_at' => NULL]);

        $date = date('Y-m-d');
        $limit_days = date('Y-m-d', strtotime("-2 days"));
        $reset_converted = DB::table('leads')
        ->where('leads.is_done', 1)
        /*->where('assign_by', '!=', 'online')
        ->where('assign_to', '!=', 'online')*/
        ->where('leads.followup_call_on', '<', $limit_days)
        ->update(['assign_to' => 'online', 'assign_by' => 'online', 'request_by'=>'online']);
        if ($reset_converted) {
            echo "dopne";
        }
    }
}
