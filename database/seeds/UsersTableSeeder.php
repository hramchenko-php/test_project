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
        $data = [
            [
                'name' => 'Автор неизвестен',
                'email' => 'author_unkown@mail.ru',
                'password' => bcrypt(str_random(12)),
            ],
            [
                'name' => 'Автор',
                'email' => 'author@mail.ru',
                'password' => bcrypt('123123'),
            ]

        ];

        \Illuminate\Support\Facades\DB::table('users')->insert($data);
    }
}
