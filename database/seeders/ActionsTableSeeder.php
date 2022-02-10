<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'list'],
            ['name' => 'add'],
            ['name' => 'edit'],
            ['name' => 'show'],
            ['name' => 'delete'],
            ['name' => 'use'],
            ['name' => 'print'],
            ['name' => 'download'],
        ];

        foreach ($data as $row_key => $row){
            if(!Action::getOneBy('name', $row['name'])){
                $resource = Action::create([
                    'uuid' => (string)Uuid::generate(config('vars.uuid_version')),
                    'name' => $row['name'],
                    'created_by' => 1,
                ]);
            }
        }
    }
}
