<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InsertData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert json file to database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $landscapes = json_decode(file_get_contents(storage_path() . "/app/private/landscapes.json"), true);
        $dataPhotographer=array('name'=>$landscapes['name'],"bio"=>$landscapes['bio'],"phone"=>$landscapes['phone'],"email"=>$landscapes['email']);
        DB::table('photographer')->insert($dataPhotographer);
        return 0;
    }
}
