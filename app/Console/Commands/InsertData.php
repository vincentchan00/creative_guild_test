<?php

namespace App\Console\Commands;

use App\Models\Media;
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
        DB::table('media')->delete();
        DB::table('photographer')->delete();
        DB::table('album')->delete();
        $photographerImg = Media::create(['path'=>$landscapes['profile_picture']]);
        $photographerData = Photographer::create(['id'=>1,'name'=>$landscapes['name'],"bio"=>$landscapes['bio'],"phone"=>$landscapes['phone'],"email"=>$landscapes['email'],'media'=>$photographerImg['id']]);
        foreach ($landscapes['album'] as $ablum){
            $ablumImg = Media::create(['path'=>$ablum['img']]);
            Album::create(['id'=>$ablum['id'],'title'=>$ablum['title'],'description'=>$ablum['description'],'media'=>$ablumImg['id'],'date'=>$ablum['date'],'featured'=>$ablum['featured'],'photographer_id'=>$photographerData['id']]);
        }
        return 0;
    }
}
