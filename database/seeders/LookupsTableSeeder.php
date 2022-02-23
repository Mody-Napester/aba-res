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
            ['name' => 'gender', 'display_name' => '{"en":"gender","ar":"النوع"}', 'details' => '',
                'child' => [
                    ['name' => 'male', 'display_name' => '{"en":"Male","ar":"ذكر"}', 'details' => ''],
                    ['name' => 'female', 'display_name' => '{"en":"Female","ar":"انثي"}', 'details' => ''],
                ]
            ],
            ['name' => 'languages', 'display_name' => '{"en":"languages","ar":"languages"}', 'details' => '',
                'child' => [
                    ['name' => 'en', 'display_name' => '{"en":"Englishِ","ar":"انجليزي"}', 'details' => 'en'],
                    ['name' => 'ar', 'display_name' => '{"en":"Englishِ","ar":"عربي"}', 'details' => 'ar'],
                ]
            ],
            ['name' => 'time_zones', 'display_name' => '{"en":"Time Zones","ar":"Time Zones"}', 'details' => '',
                'child' => [
                    ['name' => 'Africa/Cairo', 'display_name' => '{"en":"Cairo","ar":"Cairo"}', 'details' => 'Africa/Cairo'],
                    ['name' => 'Asia/Amman', 'display_name' => '{"en":"Amman","ar":"Amman"}', 'details' => 'Asia/Amman'],
                    ['name' => 'Asia/Dubai', 'display_name' => '{"en":"Dubai","ar":"Dubai"}', 'details' => 'Asia/Dubai'],
                    ['name' => 'Asia/Riyadh', 'display_name' => '{"en":"Riyadh","ar":"Riyadh"}', 'details' => 'Asia/Riyadh'],
                ]
            ],
            ['name' => 'media_types', 'display_name' => '{"en":"Media Types","ar":"Media Types"}', 'details' => '',
                'child' => [
                    ['name' => 'image', 'display_name' => '{"en":"Image","ar":"Image"}', 'details' => ''],
                    ['name' => 'video', 'display_name' => '{"en":"Video","ar":"Video"}', 'details' => ''],
                    ['name' => 'book', 'display_name' => '{"en":"Book","ar":"Book"}', 'details' => ''],
                    ['name' => 'text', 'display_name' => '{"en":"Text","ar":"Text"}', 'details' => ''],
                ]
            ],
            ['name' => 'order_types', 'display_name' => '{"en":"Order Types","ar":"Order Types"}', 'details' => '',
                'child' => [
                    ['name' => 'under_process', 'display_name' => '{"en":"under_process","ar":"under_process"}', 'details' => ''],
                    ['name' => 'under_revise', 'display_name' => '{"en":"under_revise","ar":"under_revise"}', 'details' => ''],
                    ['name' => 'delivered', 'display_name' => '{"en":"delivered","ar":"delivered"}', 'details' => ''],
                    ['name' => 'canceled', 'display_name' => '{"en":"canceled","ar":"canceled"}', 'details' => ''],
                    ['name' => 'semi_delivered', 'display_name' => '{"en":"semi_delivered","ar":"semi_delivered"}', 'details' => ''],
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
                    'related_id' => null,
                    'media_image_id' => null,
                    'name' => $row['name'],
                    'display_name' => $row['display_name'],
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
                        'related_id' => null,
                        'media_image_id' => null,
                        'name' => $sub_row['name'],
                        'display_name' => $sub_row['display_name'],
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
