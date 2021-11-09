<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class masutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
        'room_name' =>'シングル',
        'able_people'=>'1人用',

    ];
        DB::table('masutas') ->insert($param);

       
        $param = [
            'room_name' =>'ダブル',
            'able_people'=>'2人用',
    
        ];
            DB::table('masutas') ->insert($param);
    }
}
