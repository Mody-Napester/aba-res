<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\SessionResource;
use App\Models\Course;
use App\Models\Session;
use App\Models\Instructor;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class SessionRepositoryController extends Controller
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
        if(!check_authority('list.session')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Session(), $request, [
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), SessionResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.session')){
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
        if(!check_authority('add.session')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Session
        $course = Course::getOneBy(['uuid' => $request->course_uuid]);
        if(!$course){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.course')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name'
        ]);

        $fields = [
            'name' => $attributes_trans['name']['json'],
            'course_id' => $course->id,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Session::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new SessionResource($resource), 1);
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
        if(!check_authority('edit.session')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Session::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new SessionResource($resource), 1, false);
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
        if(!check_authority('edit.session')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Session::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.session')));
        }

        // Check Session
        $course = Course::getOneBy(['uuid' => $request->course_uuid]);
        if(!$course){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.course')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name'
        ]);

        $fields = [
            'name' => ($attributes_trans['name']['json']) ? $attributes_trans['name']['json'] : $resource->name,
            'course_id' => ($course)? $course->id : $resource->course_id,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Session::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new SessionResource($resource), 1);
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
        if(!check_authority('delete.session')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Session::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Session::remove($resource->id);

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
