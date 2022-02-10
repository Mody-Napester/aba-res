<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Hash;

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
            ['name' => 'Admin', 'email' => 'admin@admin.dev',],
            ['name' => 'Ahmed', 'email' => 'ahmed@admin.dev',],
            ['name' => 'Yousef', 'email' => 'yousef@admin.dev',],
        ];

        foreach ($data as $row_key => $row){
            if(!User::getBy('email', $row['email'])){
                $resource = User::create([
                    'uuid' => (string)Uuid::generate(config('vars.uuid_version')),
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'password' => Hash::make('12345678'),
                ]);
            }
        }
    }
}
