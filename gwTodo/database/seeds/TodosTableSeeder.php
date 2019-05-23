<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();
        DB::table('todos')->insert([
            [
                'title'         => 'Laravel Lessonを終わらせる',
                'finished_flg'	=> '0',
                'created_at'    => Carbon::create(2018, 1, 1),
                'updated_at'    => Carbon::create(2018, 1, 4),
            ],
            [
                'title'      	=> 'レビューに向けて理解を深める',
                'finished_flg'	=> '0',
                'created_at' 	=> Carbon::create(2018, 2, 1),
                'updated_at' 	=> Carbon::create(2018, 2, 5),
            ],
        ]);
    }
}
