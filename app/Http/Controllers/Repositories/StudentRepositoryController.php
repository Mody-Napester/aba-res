<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Models\Instructor;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class StudentRepositoryController extends Controller
{
    use MessagesHelperTrait, RequestHelperTrait, ResponseHelperTrait;

    public function __construct($res_type)
    {
        $this->response_type = $res_type;
    }

    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        // Check Permissions
        if(!check_authority('list.student')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Student(), $request, [
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), StudentResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.student')){
            return $this->general_response($this->fail_permission_message());
        }

        $data = $this->general_response($this->success_create_message(), false, 0, false);

        // Return
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {
        // Check Permissions
        if(!check_authority('add.student')){
            return $this->general_response($this->fail_permission_message());
        }

        $fields = [
            'first_name' => ($request->has("first_name")) ? $request->first_name : '',
            'last_name' => ($request->has("last_name")) ? $request->last_name : '',
            'display_name' => ($request->has("display_name")) ? $request->display_name : '',
            'email' => ($request->has("email")) ? $request->email : '',
            'phone' => ($request->has("phone")) ? $request->phone : '',
            'info' => ($request->has("info")) ? $request->info : '',
            'social_facebook_url' => ($request->has("social_facebook_url")) ? $request->social_facebook_url : '',
            'social_twitter_url' => ($request->has("social_twitter_url")) ? $request->social_twitter_url : '',
            'social_linkedin_url' => ($request->has("social_linkedin_url")) ? $request->social_linkedin_url : '',
            'social_youtube_url' => ($request->has("social_youtube_url")) ? $request->social_youtube_url : '',
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Student::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new StudentResource($resource), 1);
        }else{
            $data = $this->general_response($this->fail_create_message());
        }

        // Return
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($request, $uuid)
    {
        // Check Permissions
        if(!check_authority('edit.student')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Student::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new StudentResource($resource), 1, false);
        }else{
            $data = $this->general_response($this->fail_update_message());
        }

        // Return
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $uuid)
    {
        // Check Permissions
        if(!check_authority('edit.student')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Student::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.student')));
        }

        $fields = [
            'first_name' => ($request->has("first_name")) ? $request->first_name : $resource->first_name,
            'last_name' => ($request->has("last_name")) ? $request->last_name : $resource->last_name,
            'display_name' => ($request->has("display_name")) ? $request->display_name : $resource->display_name,
            'email' => ($request->has("email")) ? $request->email : $resource->email,
            'phone' => ($request->has("phone")) ? $request->phone : $resource->phone,
            'info' => ($request->has("info")) ? $request->info : $resource->info,
            'social_facebook_url' => ($request->has("social_facebook_url")) ? $request->social_facebook_url : $resource->social_facebook_url,
            'social_twitter_url' => ($request->has("social_twitter_url")) ? $request->social_twitter_url : $resource->social_twitter_url,
            'social_linkedin_url' => ($request->has("social_linkedin_url")) ? $request->social_linkedin_url : $resource->social_linkedin_url,
            'social_youtube_url' => ($request->has("social_youtube_url")) ? $request->social_youtube_url : $resource->social_youtube_url,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Student::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new StudentResource($resource), 1);
        }else{
            $data = $this->general_response($this->fail_update_message());
        }

        // Return
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($request, $uuid)
    {
        // Check Permissions
        if(!check_authority('delete.student')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Student::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Student::remove($resource->id);

            if ($deletedResource){
                $data = $this->general_response($this->success_delete_message());
            }else{
                $data = $this->general_response($this->fail_delete_message());
            }
        }else{
            return $this->general_response($this->fail_resource_not_found_message());
        }

        // Return
        return $data;
    }
}
