<?php

namespace Database\Seeders;

use App\Models\Lookup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

class LookupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'gender', 'details' => '',
                'child' => [
                    ['name' => 'Male', 'details' => ''],
                    ['name' => 'Female', 'details' => ''],
                ]
            ],
            ['name' => 'languages', 'details' => '',
                'child' => [
                    ['name' => 'en', 'details' => 'en'],
                    ['name' => 'ar', 'details' => 'ar'],
                ]
            ],
            ['name' => 'time_zones', 'details' => '',
                'child' => [
                    ['name' => 'Africa/Cairo', 'details' => 'Africa/Cairo'],
                    ['name' => 'Asia/Amman', 'details' => 'Asia/Amman'],
                    ['name' => 'Asia/Dubai', 'details' => 'Asia/Dubai'],
                    ['name' => 'Asia/Riyadh	', 'details' => 'Asia/Riyadh'],
                    ['name' => 'Riyadh	', 'details' => 'Riyadh'],
                ]
            ],
            ['name' => 'media_types', 'details' => '',
                'child' => [
                    ['name' => 'image', 'details' => 'image'],
                    ['name' => 'video', 'details' => 'video'],
                    ['name' => 'book', 'details' => 'book'],
                ]
            ],
        ];

        foreach ($data as $row_key => $row){

            $key = Str::slug($row['name'], '_');
            $exists = Lookup::where('key', $key)->first();
            if(!$exists){
                $resource = Lookup::create([
                    'uuid' => (string)Uuid::generate(config('vars.uuid_version')),
                    'parent_id' => 0,
                    'name' => $row['name'],
                    'key' => $key,
                    'details' => $row['details'],
                    'is_active' => 1,
                    'created_by' => 1,
                    'updated_by' => null,
                    'deleted_by' => null,
                    'ordering' => 1,
                ]);
                $resource->update([
                    'ordering' => $resource->id
                ]);

                // Child
                foreach ($row['child'] as $sub_row_key => $sub_row){

                    $sub_key = Str::slug($sub_row['name'], '_');
                    $sub_exists = Lookup::where('key', $sub_key)->first();
                    if($sub_exists){
                        $sub_key = $sub_key . rand(1111, 9999);
                    }

                    $sub_resource = Lookup::create([
                        'uuid' => (string)Uuid::generate(config('vars.uuid_version')),
                        'parent_id' => $resource->id,
                        'name' => $sub_row['name'],
                        'key' => $sub_key,
                        'details' => $sub_row['details'],
                        'is_active' => 1,
                        'created_by' => 1,
                        'updated_by' => null,
                        'deleted_by' => null,
                        'ordering' => 1,
                    ]);
                    $sub_resource->update([
                        'ordering' => $sub_resource->id
                    ]);

                }
            }
        }
    }
}
