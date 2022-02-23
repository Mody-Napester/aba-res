<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\MediaResource;
use App\Models\Media;
use App\Models\Instructor;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class MediaRepositoryController extends Controller
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
        if(!check_authority('list.media')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Media(), $request, [
            "file_name" => "like",
            "is_active" => "=",
        ]);

        $data = $this->general_response($this->success_list_message(), MediaResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.media')){
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
        if(!check_authority('add.media')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Media Type
        $mts = lookups('media_types')->pluck('uuid')->toArray();
        if(in_array($request->media_type_lookup_uuid, $mts)){
            $media_type = lookup('uuid', $request->media_type_lookup_uuid);
        }else{
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media')));
        }

        // Image
        $filename = null;
        if ($request->hasFile("file")) {
            $upload = upload_file($media_type->name, $request->file('file'), 'assets_public/files/'.$media_type->name);
            if ($upload['status'] == true) {
                $filename = $upload['filename'];
            }else{
                return $this->general_response($this->fail_general_message($upload['message']));
            }
        }else{
            return $this->general_response($this->fail_general_message(trans('messages.file_not_selected')));
        }

        $fields = [
            'media_type_lookup_id' => $media_type->id,
            'file_name' => $filename,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Media::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new MediaResource($resource), 1);
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
        if(!check_authority('edit.media')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Media::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new MediaResource($resource), 1, false);
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
        if(!check_authority('edit.media')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Media::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media')));
        }

        // Check Media Type
        $mts = lookups('media_types')->pluck('uuid')->toArray();
        if(in_array($request->media_type_lookup_uuid, $mts)){
            $media_type = lookup('uuid', $request->media_type_lookup_uuid);
        }else{
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media')));
        }

        // Image
        $filename = null;
        if ($request->hasFile("file")) {
            $upload = upload_file($media_type->name, $request->file('file'), 'assets_public/files/'.$media_type->name);
            if ($upload['status'] == true) {
                $filename = $upload['filename'];
            }else{
                return $this->general_response($this->fail_general_message($upload['message']));
            }
        }else{
            $filename = $resource->file_name;
        }

        $fields = [
            'media_type_lookup_id' => $media_type->id,
            'file_name' => $filename,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Media::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new MediaResource($resource), 1);
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
        if(!check_authority('delete.media')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Media::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Media::remove($resource->id);

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
