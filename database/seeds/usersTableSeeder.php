<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' =>'古川',
            'address' =>'京都府',
            'tel' =>'080-3663-0001',
        ];
        DB::table('users') ->insert($param);

        $param = [
            'name' =>'佃T',
            'address' =>'奈良県',
            'tel' =>'080-3663-0002',
        ];
        DB::table('users') ->insert($param);
    }
}
