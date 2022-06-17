<?php

namespace App\Console\Commands;

use App\Models\Photographer;
use App\Models\Album;
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
        DB::table('photographer')->delete();
        DB::table('album')->delete();
        Photographer::create(['id'=>1,'name'=>$landscapes['name'],"bio"=>$landscapes['bio'],"phone"=>$landscapes['phone'],"email"=>$landscapes['email']]);
        foreach ($landscapes['album'] as $ablum){
            Album::create(['id'=>$ablum['id'],'title'=>$ablum['title'],'description'=>$ablum['description'],'img'=>$ablum['img'],'date'=>$ablum['date'],'featured'=>$ablum['featured']]);
        }
        return 0;
    }
}
