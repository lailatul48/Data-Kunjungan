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
            ['id' => 1, 'nama' => 'Lailatul', 'email' => 'Lailatulfitriyah@gmail.com', 'telephone' => '12345678', 'keperluan' => 'membayar spp', 'description' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'nama' => 'Rosita', 'email' => 'Rosita@gmail.com', 'telephone' => '12345678', 'keperluan' => 'membayar spp', 'description' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'nama' => 'Alfira', 'email' => 'Alfira@gmail.com', 'telephone' => '12345678', 'keperluan' => 'membayar spp', 'description' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'nama' => 'Syahrul', 'email' => 'Syahrul@gmail.com', 'telephone' => '12345678', 'keperluan' => 'membayar spp', 'description' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'nama' => 'Arifasiwi', 'email' => 'Arifasiwi@gmail.com', 'telephone' => '12345678', 'keperluan' => 'membayar spp', 'description' => 'baca', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'nama' => 'Dea', 'email' => 'Dea@gmail.com', 'telephone' => '12345678', 'keperluan' => 'membayar spp', 'description' => 'baca', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('log')->insert($log);
    }
}
