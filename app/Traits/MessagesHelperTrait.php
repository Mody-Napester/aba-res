<?php

namespace App\Traits;

trait MessagesHelperTrait{

    public function fail_permission(){
        $data['status'] = [
            'success' => false,
            'reason' => 'permission_failed',
            'type' => 'success',
            'messages' => trans('messages.you_dont_have_permissions'),
        ];
        return $data;
    }

    public function success_list(){
        $data['status'] = [
            'success' => true,
            'reason' => 'list_resource',
            'type' => 'success',
            'message' => trans('messages.Listed_successfully'),
        ];
        return $data;
    }

    public function success_create(){
        $data['status'] = [
            'success' => true,
            'reason' => 'create_resource',
            'type' => 'success',
            'message' => trans('messages.Created_successfully'),
        ];
        return $data;
    }

    public function fail_create(){
        $data['status'] = [
            'success' => false,
            'reason' => 'create_resource',
            'type' => 'success',
            'message' => trans('messages.creation_failed'),
        ];
        return $data;
    }

    public function success_edit(){
        $data['status'] = [
            'success' => true,
            'reason' => 'edit_resource',
            'type' => 'success',
            'message' => trans('messages.edit_resource'),
        ];
        return $data;
    }

    public function fail_edit(){
        $data['status'] = [
            'success' => false,
            'reason' => 'edit_resource',
            'type' => 'success',
            'message' => trans('messages.edit_failed'),
        ];
        return $data;
    }
}
