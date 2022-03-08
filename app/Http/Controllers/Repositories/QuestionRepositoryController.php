<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Models\Media;
use App\Models\Quiz;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;

class QuestionRepositoryController extends Controller
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
        if(!check_authority('list.question')){
            return $this->general_response($this->fail_permission_message());
        }

        // Get All Resource
        $data_request = $this->get_data(new Question(), $request, [
            "quiz_uuid" => "=",
        ]);

        $data = $this->general_response($this->success_list_message(), QuestionResource::collection($data_request['resources']->get()), $data_request['resources']->count(), false);

        // Return
        return $data;
    }

    /**
     * Create resource.
     */
    public function create($request)
    {
        // Check Permissions
        if(!check_authority('add.question')){
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
        if(!check_authority('add.question')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Media Cover
        $quiz = Quiz::getOneBy(['uuid' => $request->quiz_uuid]);
        if(!$quiz){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.quiz')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'details'
        ]);

        $fields = [
            'quiz_id' => $quiz->id,
            'details' => $attributes_trans['details']['json'],
            'created_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $resource = Question::store($fields);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($resource){
            $data = $this->general_response($this->success_create_message(), new QuestionResource($resource), 1);
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
        if(!check_authority('edit.question')){
            return $this->general_response($this->fail_permission_message());
        }

        $resource = Question::getOneBy(['uuid' => $uuid]);

        if($resource){
            $data = $this->general_response($this->success_update_message(), new QuestionResource($resource), 1, false);
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
        if(!check_authority('edit.question')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Question::getOneBy(['uuid' => $uuid]);
        if(!$resource){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.question')));
        }

        // Check Media Cover
        $quiz = Quiz::getOneBy(['uuid' => $request->quiz_uuid]);
        if(!$quiz){
            return $this->general_response($this->fail_resource_not_found_message(trans('messages.quiz')));
        }

        // Translate Attributes
        $attributes_trans = setAttributesTrans([
            'details'
        ]);

        $fields = [
            'quiz_id' => ($quiz)? $quiz->id : $resource->quiz_id,
            'details' => ($attributes_trans['details']['json']) ? $attributes_trans['details']['json'] : $resource->details,
            'updated_by' => getCurrentUserId(),
        ];

        // Do Code
        try {
            $updatedResource = Question::edit($fields, $resource->id);
        }catch (\Exception $exception){
            $exceptions = 'Message : ' . $exception->getMessage() . ' File : ' . $exception->getFile();
            return $this->general_response($this->fail_exception_message($exceptions));
        }

        // Return
        if($updatedResource){
            $data = $this->general_response($this->success_update_message(), new QuestionResource($resource), 1);
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
        if(!check_authority('delete.question')){
            return $this->general_response($this->fail_permission_message());
        }

        // Check Resource
        $resource = Question::getOneBy(['uuid' => $uuid]);
        if($resource){
            $deletedResource = Question::remove($resource->id);

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
