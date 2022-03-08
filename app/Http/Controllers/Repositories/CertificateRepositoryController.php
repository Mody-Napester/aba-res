<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\CertificateResource;
use App\Models\Certificate;
use App\Models\Instructor;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class CertificateRepositoryController extends Controller
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
        if(!check_authority('list.certificate')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Certificate(), $request, [
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), CertificateResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.certificate')){
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
        if(!check_authority('add.certificate')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Media Cover
        $media_cover = Media::getOneBy(['uuid' => $request->media_cover_uuid]);
        if(!$media_cover){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media_cover')));
        }

        // Check Media Image
        $media_certificate = Media::getOneBy(['uuid' => $request->media_certificate_uuid]);
        if(!$media_certificate){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media_certificate')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'details'
        ]);

        $fields = [
            'name' => $attributes_trans['name']['json'],
            'details' => $attributes_trans['details']['json'],
            'media_cover_id' => $media_cover->id,
            'media_certificate_id' => $media_certificate->id,
            'price' => ($request->has("price")) ? $request->price : 0,
            'is_free' => ($request->has("is_free") && $request->is_free == 1) ? 1 : 0,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Certificate::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new CertificateResource($resource), 1);
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
        if(!check_authority('edit.certificate')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Certificate::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new CertificateResource($resource), 1, false);
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
        if(!check_authority('edit.certificate')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Certificate::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.certificate')));
        }

        // Check Media Cover
        $media_cover = Media::getOneBy(['uuid' => $request->media_cover_uuid]);
        if(!$media_cover){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media_cover')));
        }

        // Check Media Image
        $media_certificate = Media::getOneBy(['uuid' => $request->media_certificate_uuid]);
        if(!$media_certificate){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media_certificate')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'details'
        ]);

        $fields = [
            'name' => ($attributes_trans['name']['json']) ? $attributes_trans['name']['json'] : $resource->name,
            'details' => ($attributes_trans['details']['json']) ? $attributes_trans['details']['json'] : $resource->details,
            'media_cover_id' => ($media_cover)? $media_cover->id : $resource->media_cover_id,
            'media_certificate_id' => ($media_certificate)? $media_certificate->id : $resource->media_certificate_id,
            'price' => ($request->has("price")) ? $request->price : $resource->price,
            'is_free' => ($request->has("is_free") && $request->is_free == 1) ? 1 : 0,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Certificate::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new CertificateResource($resource), 1);
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
        if(!check_authority('delete.certificate')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Certificate::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Certificate::remove($resource->id);

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
