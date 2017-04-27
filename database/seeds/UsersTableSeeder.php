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
            ['id' => 1, 'name' => 'sdvdfv', 'id_anggota' => 'A001', 'nis' => 1, 'email' => 'laila@ymail.com', 'password' => 'sdvsdv', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'dvsvf', 'id_anggota' => 'A002', 'nis' => 1, 'email' => 'lailatul@gmail.com', 'password' => 'sdvs', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'vsdfvg', 'id_anggota' => 'A003', 'nis' => 1, 'email' => 'lailatul@gmail.com', 'password' => 'sdvs', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'fvdfbv', 'id_anggota' => 'A001', 'nis' => 1, 'email' => 'lailatul@gmail.com', 'password' => 'svsv', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'vedfvg', 'id_anggota' => 'A002', 'nis' => 1, 'email' => 'lailatul@gmail.com', 'password' => 'svde', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'vbsdfvg', 'id_anggota' => 'A003', 'nis' => 1, 'email' => 'lailatul@gmail.com', 'password' => 'sdvsdv', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($users);
    }
}
