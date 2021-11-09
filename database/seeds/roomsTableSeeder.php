<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [

        
        'room_kinds_id'=>'1',
        'room_number'=>'100',
            

        ];
        DB::table('rooms') ->insert($param);

        $param = [

            
        'room_kinds_id'=>'2',
        'room_number'=>'101',
                
    
            ];
         DB::table('rooms') ->insert($param);
    }
}
