<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('users')->truncate();

        $users = [
            ['nis' => 'sdvdfv', 'id' => 1, 'name' => 'sdvdfv', 'id_anggota' => '001', 'nis' => 1, 'email' => 'laila@ymail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 2, 'name' => 'dvsvf', 'id_anggota' => '002', 'nis' => 1, 'email' => 'lailatul1@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 3, 'name' => 'vsdfvg', 'id_anggota' => '003', 'nis' => 1, 'email' => 'lailatul2@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 4, 'name' => 'fvdfbv', 'id_anggota' => '001', 'nis' => 1, 'email' => 'lailatul3@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 5, 'name' => 'vedfvg', 'id_anggota' => '002', 'nis' => 1, 'email' => 'lailatul4@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 6, 'name' => 'vbsdfvg', 'id_anggota' => '003', 'nis' => 1, 'email' => 'lailatul5@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($users);
    }
}
