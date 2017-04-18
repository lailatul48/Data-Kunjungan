<?php


use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('visitors')->truncate();

        $visitors = [
            ['name' => 'lailatul', 'nis' => '001', 'created_at' => \Carbon\Carbon::now()],
            ['name' => 'fitri', 'nis' => '002', 'created_at' => \Carbon\Carbon::now()],
            ['name' => 'yah', 'nis' => '003', 'created_at' => \Carbon\Carbon::now()],
            ['name' => 'lail', 'nis' => '003', 'created_at' => \Carbon\Carbon::now()],
            ['name' => 'fit', 'nis' => '004', 'created_at' => \Carbon\Carbon::now()],
            ['name' => 'lala', 'nis' => '005', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('visitors')->insert($visitors);
    }
}
