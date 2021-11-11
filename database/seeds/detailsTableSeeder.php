<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reserve_id' =>'1',
            'room_id' =>'1',
            'day' =>'2021-11-21',
            'price' =>'6600円',
        ];
        DB::table('details') ->insert($param);

        $param = [
            'reserve_id' =>'2',
            'room_id' =>'2',
            'day' =>'2021-11-25',
            'price' =>'9999円',
        ];
        DB::table('details') ->insert($param);
    }
}
