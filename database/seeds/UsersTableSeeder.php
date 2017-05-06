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
            ['nis' => 'sdvdfv', 'id' => 1, 'name' => 'laila', 'nis' => 1, 'email' => 'laila@ymail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 2, 'name' => 'lailatul1', 'nis' => 1, 'email' => 'lailatul1@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 3, 'name' => 'lailatul2', 'nis' => 1, 'email' => 'lailatul2@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 4, 'name' => 'lailatul3', 'nis' => 1, 'email' => 'lailatul3@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 5, 'name' => 'lailatul4', 'nis' => 1, 'email' => 'lailatul4@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
            ['nis' => 'sdvdfv', 'id' => 6, 'name' => 'lailatul5', 'nis' => 1, 'email' => 'lailatul5@gmail.com', 'password' =>bcrypt('laila'), 'level' => 'guru', 'status' => 'gatau', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($users);
    }
}
