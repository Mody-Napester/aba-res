<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class CommentRepositoryController extends Controller
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
        if(!check_authority('list.comment')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Comment(), $request, [
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), CommentResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.comment')){
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
        if(!check_authority('add.comment')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Media Image
        $avatar = Media::getOneBy(['uuid' => $request->avatar]);
        if(!$avatar){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.avatar')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'speciality', 'details'
        ]);

        $fields = [
            'name' => $attributes_trans['name']['json'],
            'speciality' => $attributes_trans['speciality']['json'],
            'details' => $attributes_trans['details']['json'],
            'phone' => ($request->has("phone")) ? $request->phone : '',
            'email' => ($request->has("email")) ? $request->email : '',
            'avatar' => $avatar->id,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        $resource = Comment::store($fields);

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new CommentResource($resource), 1);
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
        if(!check_authority('edit.comment')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Comment::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new CommentResource($resource), 1, false);
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
        if(!check_authority('edit.comment')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Comment::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message());
        }

        // Check Media Image
        $avatar = Media::getOneBy(['uuid' => $request->avatar]);
        if(!$avatar){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.avatar')));
        }

        $attributes_trans = setAttributesTrans([
            'name', 'speciality', 'details'
        ]);

        $fields = [
            'name' => ($attributes_trans['name']['json']) ? $attributes_trans['name']['json'] : $resource->name,
            'speciality' => ($attributes_trans['speciality']['json']) ? $attributes_trans['speciality']['json'] : $resource->speciality,
            'details' => ($attributes_trans['details']['json']) ? $attributes_trans['details']['json'] : $resource->details,
            'phone' => ($request->has("phone")) ? $request->phone : $resource->phone,
            'email' => ($request->has("email")) ? $request->email : $resource->email,
            'avatar' => ($avatar) ? $avatar->id : $resource->avatar,
            'is_active' => ($request->has("is_active") && in_array($request->is_active, [0,1])) ? $request->is_active : $resource->is_active,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        $updatedResource = Comment::edit($fields, $resource->id);

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new CommentResource($resource), 1);
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
        if(!check_authority('delete.comment')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Comment::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Comment::remove($resource->id);

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

