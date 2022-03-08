<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Media;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class CourseRepositoryController extends Controller
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
        if(!check_authority('list.course')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Course(), $request, [
            "is_published" => "=",
            "name" => "like",
        ]);

        $data = $this->general_response($this->success_list_message(), CourseResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.course')){
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
        if(!check_authority('add.course')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Instructor
        $instructor = Instructor::getOneBy(['uuid' => $request->instructor_uuid]);
        if(!$instructor){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.instructor')));
        }

        // Check Media Banner
        $media_banner = Media::getOneBy(['uuid' => $request->media_banner_uuid]);
        if(!$media_banner){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media_banner')));
        }

        // Check Media Image
        $media_image = Media::getOneBy(['uuid' => $request->media_image_uuid]);
        if(!$media_image){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.media_image')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'short_details', 'details'
        ]);

        $fields = [
            'instructor_id' => $instructor->id,
            'name' => $attributes_trans['name']['json'],
            'short_details' => $attributes_trans['short_details']['json'],
            'details' => $attributes_trans['details']['json'],
            'media_banner_id' => $media_banner->id,
            'media_image_id' => $media_image->id,
            'price' => ($request->has("price")) ? $request->price : 0,
            'time_frame' => ($request->has("time_frame")) ? $request->time_frame : 0,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Course::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new CourseResource($resource), 1);
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
        if(!check_authority('edit.course')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Course::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new CourseResource($resource), 1, false);
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
        if(!check_authority('edit.course')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Course::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.course')));
        }

        // Check Instructor
        $instructor = Instructor::getOneBy(['uuid' => $request->instructor_uuid]);
        if(!$instructor){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.instructor')));
        }

        // Check Media Banner
        $media_banner = Media::getOneBy(['uuid' => $request->media_banner_uuid]);

        // Check Media Image
        $media_image = Media::getOneBy(['uuid' => $request->media_image_uuid]);

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'name', 'short_details', 'details'
        ]);

        $fields = [
            'instructor_id' => ($instructor)? $instructor->id : $resource->instructor_id,
            'name' => ($attributes_trans['name']['json']) ? $attributes_trans['name']['json'] : $resource->name,
            'short_details' => ($attributes_trans['short_details']['json']) ? $attributes_trans['short_details']['json'] : $resource->short_details,
            'details' => ($attributes_trans['details']['json']) ? $attributes_trans['details']['json'] : $resource->details,
            'media_banner_id' => ($media_banner)? $media_banner->id : $resource->media_banner_id,
            'media_image_id' => ($media_image)? $media_image->id : $resource->media_image_id,
            'price' => ($request->has("price")) ? $request->price : $resource->price,
            'time_frame' => ($request->has("time_frame")) ? $request->time_frame : $resource->time_frame,
            'is_published' => ($request->has("is_published") && $request->is_published == 1) ? 1 : 0,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Course::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new CourseResource($resource), 1);
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
        if(!check_authority('delete.course')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Course::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Course::remove($resource->id);

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
