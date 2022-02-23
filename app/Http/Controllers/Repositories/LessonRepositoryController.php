<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Models\Lesson;
use App\Models\Instructor;
use App\Models\Media;
use App\Models\Session;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class LessonRepositoryController extends Controller
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
        if(!check_authority('list.lesson')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Lesson(), $request, [
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), LessonResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.lesson')){
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
        if(!check_authority('add.lesson')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Session
        $session = Session::getOneBy(['uuid' => $request->session_uuid]);
        if(!$session){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.session')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name'
        ]);

        $fields = [
            'name' => $attributes_trans['name']['json'],
            'session_id' => $session->id,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Lesson::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new LessonResource($resource), 1);
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
        if(!check_authority('edit.lesson')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Lesson::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new LessonResource($resource), 1, false);
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
        if(!check_authority('edit.lesson')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Lesson::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.lesson')));
        }

        // Check Session
        $session = Session::getOneBy(['uuid' => $request->session_uuid]);
        if(!$session){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.session')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name'
        ]);

        $fields = [
            'name' => ($attributes_trans['name']['json']) ? $attributes_trans['name']['json'] : $resource->name,
            'session_id' => ($session)? $session->id : $resource->session_id,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Lesson::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new LessonResource($resource), 1);
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
        if(!check_authority('delete.lesson')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Lesson::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Lesson::remove($resource->id);

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
