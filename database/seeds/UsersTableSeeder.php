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
            ['id' => 1, 'name' => 'sdvdfv', 'email' => 'laila@ymail.com', 'password' => 'sdvsdv', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'dvsvf', 'email' => 'lailatul@gmail.com', 'password' => 'sdvs', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'vsdfvg', 'email' => 'lailatul@gmail.com', 'password' => 'sdvs', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'fvdfbv', 'email' => 'lailatul@gmail.com', 'password' => 'svsv', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'vedfvg', 'email' => 'lailatul@gmail.com', 'password' => 'svde', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'vbsdfvg', 'email' => 'lailatul@gmail.com', 'password' => 'sdvsdv', 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($users);
    }
}
