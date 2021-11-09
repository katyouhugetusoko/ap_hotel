<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            
            'user_id'=>'1',
            'number_of_people'=>'大1人',
            'check_in_day'=>'2021-11-21',
            'check_out_day'=>'2021-11-23',
        ];
       DB::table('reserves') -> insert($param);

       $param =[
        
        'user_id'=>'2',
        'number_of_people'=>'大2人',
        'check_in_day'=>'2021-11-25',
        'check_out_day'=>'2021-11-30',
    ];
      DB::table('reserves') -> insert($param);
    }
}
