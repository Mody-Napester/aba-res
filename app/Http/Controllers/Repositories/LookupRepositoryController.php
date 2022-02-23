<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\LookupResource;
use App\Models\Lookup;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class LookupRepositoryController extends Controller
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
        if(!check_authority('list.lookup')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Lookup(), $request, [
            "name" => "like",
            "parent_id" => "=",
        ]);

        $data = $this->general_response($this->success_list_message(), LookupResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.lookup')){
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
        if(!check_authority('add.lookup')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check in name already taken
        if(Lookup::getBy('name', $request->name)){
            return $this->general_response($this->fail_general_message(trans('messages.already_exists')));
        }

        // Check Media Image
        $media_image_id = null;
        $media_image = Media::getOneBy(['uuid' => $request->media_image_uuid]);
        if($media_image){$media_image_id = $media_image->id;}

        // Check Parent
        $parent_id = 0;
        if($request->has('parent') && $request->parent != 0){
            $parent = Lookup::where('uuid', $request->parent)->first();
            if(!$parent){
                return $this->general_response($this->fail_general_message(trans('messages.parent_not_exists')));
            }
            $parent_id = $parent->id;
        }

        // Check Related
        $related_id = 0;
        if($request->has('related') && $request->related != 0){
            $related = Lookup::where('uuid', $request->related)->first();
            if(!$related){
                return $this->general_response($this->fail_general_message(trans('messages.related_not_exists')));
            }
            $related_id = $related->id;
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'display_name', 'details'
        ]);

        $fields = [
            'key' => ($request->has("name")) ? $request->name : '',
            'parent_id' => $parent_id,
            'related_id' => $related_id,
            'media_image_id' => $media_image_id,
            'name' => ($request->has("name")) ? $request->name : '',
            'display_name' => $attributes_trans['display_name']['json'],
            'details' => $attributes_trans['details']['json'],
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'ordering' => ($request->has("ordering")) ? $request->ordering : null,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        $resource = Lookup::store($fields);

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new LookupResource($resource), 1);
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
        if(!check_authority('edit.lookup')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Lookup::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new LookupResource($resource), 1, false);
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
        if(!check_authority('edit.lookup')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Lookup::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message());
        }

        // Check in name already taken
        if(Lookup::where('name', $request->name)->where('id', '<>',$resource->id)->first()){
            return $this->general_response($this->fail_general_message(trans('messages.already_exists')));
        }

        // Check Media Image
        $media_image_id = null;
        $media_image = Media::getOneBy(['uuid' => $request->media_image_uuid]);
        if($media_image){$media_image_id = $media_image->id;}

        // Check Parent
        $parent_id = 0;
        if($request->has('parent') && $request->parent != 0){
            $parent = Lookup::where('uuid', $request->parent)->first();
            if(!$parent){
                return $this->general_response($this->fail_general_message(trans('messages.parent_not_exists')));
            }
            $parent_id = $parent->id;
        }

        // Check Related
        $related_id = 0;
        if($request->has('related') && $request->related != 0){
            $related = Lookup::where('uuid', $request->related)->first();
            if(!$related){
                return $this->general_response($this->fail_general_message(trans('messages.related_not_exists')));
            }
            $related_id = $related->id;
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'display_name', 'details'
        ]);

        $fields = [
            'parent_id' => $parent_id,
            'related_id' => $related_id,
            'media_image_id' => $media_image_id,
//            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'display_name' => ($attributes_trans['display_name']['json']) ? $attributes_trans['display_name']['json'] : $resource->display_name,
            'details' => ($attributes_trans['details']['json']) ? $attributes_trans['details']['json'] : $resource->details,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'ordering' => ($request->has("ordering")) ? $request->ordering : $resource->ordering,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        $updatedResource = Lookup::edit($fields, $resource->id);

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new LookupResource($resource), 1);
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
        if(!check_authority('delete.lookup')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Lookup::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Lookup::remove($resource->id);

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

