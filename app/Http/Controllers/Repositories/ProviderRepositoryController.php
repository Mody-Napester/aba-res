<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProviderResource;
use App\Models\Provider;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class ProviderRepositoryController extends Controller
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
        if(!check_authority('list.provider')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Provider(), $request, [
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), ProviderResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.provider')){
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
        if(!check_authority('add.provider')){
            return $this->general_response($this->fail_permission_message());
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'display_name', 'details'
        ]);

        $fields = [
            'name' => $request->name,
            'display_name' => $attributes_trans['display_name']['json'],
            'details' => $attributes_trans['details']['json'],
            'class' => $request->class,
            'color' => $request->color,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        $resource = Provider::store($fields);

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new ProviderResource($resource), 1);
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
        if(!check_authority('edit.provider')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Provider::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new ProviderResource($resource), 1, false);
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
        if(!check_authority('edit.provider')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Provider::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message());
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'display_name', 'details'
        ]);

        $fields = [
            'name' => ($request->has('name'))? $request->name : $resource->name,
            'display_name' => ($attributes_trans['display_name']['json']) ? $attributes_trans['display_name']['json'] : $resource->display_name,
            'details' => ($attributes_trans['details']['json']) ? $attributes_trans['details']['json'] : $resource->details,
            'class' => ($request->has('class'))? $request->class : $resource->class,
            'color' => ($request->has('color'))? $request->color : $resource->color,
            'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        $updatedResource = Provider::edit($fields, $resource->id);

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new ProviderResource($resource), 1);
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
        if(!check_authority('delete.provider')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Provider::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Provider::remove($resource->id);

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

