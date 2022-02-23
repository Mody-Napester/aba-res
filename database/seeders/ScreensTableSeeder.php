<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Screen;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class ScreensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
//            ['name' => 'action', 'child' => ['list', 'add', 'edit', 'show', 'delete', 'use', 'print', 'download', 'change_status']],
            ['name' => 'dashboard', 'child' => ['list', 'use']],
            ['name' => 'work_flow', 'child' => ['use']],
            ['name' => 'security', 'child' => ['use']],
            ['name' => 'action', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'screen', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'group', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'user', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'lookup', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'media', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'instructor', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'course', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'session', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'lesson', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'student', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'book', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'currency', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'social', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'provider', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'setting', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'testimonial', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'translations', 'child' => ['list']],
            ['name' => 'comment', 'child' => ['list', 'add', 'edit', 'show', 'delete']],
            ['name' => 'order', 'child' => ['list', 'add', 'edit', 'show', 'print', 'change_status']],
        ];

        foreach ($data as $row_key => $row){
            if(!Screen::getOneBy(['name' => $row['name']])){
                $resource = Screen::create([
                    'uuid' => (string)Uuid::generate(config('vars.uuid_version')),
                    'name' => $row['name'],
                    'created_by' => 1,
                ]);

                // Add Actions
                if($resource){
                    foreach ($row['child'] as $action_name) {
                        $action = Action::getOneBy('name', $action_name);
                        if($action){
                            $resource->actions()->attach($action->id);
                        }
                    }
                }
            }
        }
    }
}
