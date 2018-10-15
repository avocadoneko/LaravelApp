<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => 'taro',
          'mail' => 'taro@suzuki.jp',
          'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'troy',
          'mail' => 'debu@kim.jp',
          'age' => 7,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'natsuho',
          'mail' => 'avo@kim.jp',
          'age' => 22,
        ];
        DB::table('people')->insert($param);
    }
}
