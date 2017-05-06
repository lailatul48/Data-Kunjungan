<?php


use Illuminate\Database\Seeder;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        // truncate record
        DB::table('log')->truncate();

        $log = [
            ['id' => 1, 'user_id' => 1, 'description' => 'sdvdfv', 'type' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'user_id' => 2, 'description' => 'dvsvf', 'type' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'user_id' => 3, 'description' => 'vsdfvg', 'type' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'user_id' => 4, 'description' => 'fvdfbv', 'type' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'user_id' => 5, 'description' => 'vedfvg', 'type' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'user_id' => 6, 'description' => 'vbsdfvg', 'type' => 'baca', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('log')->insert($log);
    }
}
