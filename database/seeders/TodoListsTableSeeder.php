<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $param = [
            'content' => 'test1',
        ];
        DB::table('todolists')->insert($param);
         $param = [
            'content' => 'test2',
        ];
        DB::table('todolists')->insert($param);
         $param = [
            'content' => 'test3',
        ];
        DB::table('todolists')->insert($param);
         $param = [
            'content' => 'test4',
        ];
        DB::table('todolists')->insert($param);
         $param = [
            'content' => 'test5',
        ];
        DB::table('todolists')->insert($param);
        
    }
}
