<?php

namespace App\Traits;

trait MessagesHelperTrait{

    // Informational (1XX)
    public $status_code_100 = 100; // Continue

    // Success (2XX)
    public $status_code_200 = 200; // OK (List, Update, Delete)
    public $status_code_201 = 201; // Created

    // Redirection (3XX)
    public $status_code_301 = 301; // Moved Permanently
    public $status_code_304 = 304; // Not Modified (Created, Updated, Deleted)

    // Client Error (4XX)
    public $status_code_400 = 400; // Bad Request
    public $status_code_401 = 401; // Unauthorized
    public $status_code_402 = 402; // Payment Required
    public $status_code_403 = 403; // Forbidden
    public $status_code_404 = 404; // Not Found

    // Server Error (5XX)
    public $status_code_500 = 500; // Internal Server Error

    public function fail_permission_message(){
        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_401,
            'reason' => 'permission_failed',
            'type' => 'error',
            'message' => trans('messages.you_dont_have_permissions'),
        ];
        return $data;
    }

    public function fail_exception_message($exception){
        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_400,
            'reason' => 'exception_failed',
            'type' => 'error',
            'message' => $exception,
        ];
        return $data;
    }

    public function fail_resource_not_found_message($resource_name = null){
        if(is_null($resource_name)){
            $message = trans('messages.resource_not_found');
        }else{
            $message = $resource_name . ' ' . trans('messages.is_not_exists');
        }

        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_404,
            'reason' => 'resource_not_found',
            'type' => 'error',
            'message' => $message,
        ];
        return $data;
    }

    public function success_list_message(){
        $data['status'] = [
            'success' => true,
            'code' => $this->status_code_200,
            'reason' => 'list_resource',
            'type' => 'success',
            'message' => trans('messages.Listed_successfully'),
        ];
        return $data;
    }

    public function success_create_message(){
        $data['status'] = [
            'success' => true,
            'code' => $this->status_code_201,
            'reason' => 'create_resource',
            'type' => 'success',
            'message' => trans('messages.Created_successfully'),
        ];
        return $data;
    }

    public function fail_create_message(){
        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_304,
            'reason' => 'create_resource',
            'type' => 'error',
            'message' => trans('messages.creation_failed'),
        ];
        return $data;
    }

    public function success_update_message(){
        $data['status'] = [
            'success' => true,
            'code' => $this->status_code_200,
            'reason' => 'edit_resource',
            'type' => 'success',
            'message' => trans('messages.edit_resource'),
        ];
        return $data;
    }

    public function fail_update_message(){
        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_304,
            'reason' => 'edit_resource',
            'type' => 'error',
            'message' => trans('messages.edit_failed'),
        ];
        return $data;
    }

    public function success_delete_message(){
        $data['status'] = [
            'success' => true,
            'code' => $this->status_code_200,
            'reason' => 'edit_resource',
            'type' => 'success',
            'message' => trans('messages.deleted_successfully'),
        ];
        return $data;
    }

    public function fail_delete_message(){
        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_304,
            'reason' => 'edit_resource',
            'type' => 'error',
            'message' => trans('messages.can_not_deleted'),
        ];
        return $data;
    }

    public function success_general_message($message = ''){
        $data['status'] = [
            'success' => true,
            'code' => $this->status_code_200,
            'reason' => 'general',
            'type' => 'success',
            'message' => $message,
        ];
        return $data;
    }

    public function fail_general_message($message = ''){
        $data['status'] = [
            'success' => false,
            'code' => $this->status_code_304,
            'reason' => 'general',
            'type' => 'error',
            'message' => $message,
        ];
        return $data;
    }
}
