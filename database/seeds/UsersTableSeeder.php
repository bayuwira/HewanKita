<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123#'),
            'hak_akses' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user_details')->insert([
            'user_id' => $user->id,
            'no_telp' => '081222333444',
            'alamat'  => 'Kampus Teknik Informatik',
            'thumbnail' => NULL
        ])
        // DB::table('users')->insert([
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'password' => bcrypt('test123#'),
        //     'hak_akses' => '2',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
    }
}
