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
            ['id' => '1', 'name' => 'lailatul', 'nis' => '001', 'created_at' => \Carbon\Carbon::now()],
            ['id' => '2', 'name' => 'fitri', 'nis' => '002', 'created_at' => \Carbon\Carbon::now()],
            ['id' => '3', 'name' => 'yah', 'nis' => '003', 'created_at' => \Carbon\Carbon::now()],
            ['id' => '4', 'name' => 'lail', 'nis' => '003', 'created_at' => \Carbon\Carbon::now()],
            ['id' => '5', 'name' => 'fit', 'nis' => '004', 'created_at' => \Carbon\Carbon::now()],
            ['id' => '6', 'name' => 'lala', 'nis' => '005', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('visitors')->insert($visitors);
    }
}
