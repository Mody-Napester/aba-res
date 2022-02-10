<?php

namespace App\Traits;

trait ResponseHelperTrait
{

    public $status_code_100 = 100; // Information Response
    public $status_code_200 = 200; // Success Response
    public $status_code_301 = 301; // Redirect
    public $status_code_400 = 400; // Client Response
    public $status_code_401 = 401; // Unauthorized
    public $status_code_500 = 500; // Server Error

    // Return General Response
    public function general_response($resource_items, $total_items,
                                     $message = '', $status_code = null,
                                     $has_pagination = true, $current_page = null, $take_count = null)
    {
        if ($has_pagination) {
            $dataPagination = [
                'items' => $resource_items,
                'total' => $total_items,
                'pageNumber' => $current_page,
                'pageSize' => $take_count,
            ];
        } else {
            $dataPagination = $resource_items;
        }

        $data = [
            'data' => $dataPagination,
            'message' => $message,
            'statusCode' => $status_code,
        ];

        return response($data, $status_code);
    }

    // Success Response
    public function success_response($resource_items, $total_items, $client_message, $has_pagination = true, $current_page = null, $take_count = null)
    {
        $message = trans('messages.successfully') . '...' . $client_message;
        return $this->general_response($resource_items, $total_items, $message, $this->status_code_200, $has_pagination, $current_page, $take_count);
    }

    // Client Error Response
    public function client_error_response($resource_items, $total_items, $client_message, $has_pagination = true, $current_page = null, $take_count = null)
    {
        $message = trans('messages.error!') . '...' . $client_message;
        return $this->general_response($resource_items, $total_items, $message, $this->status_code_400, $has_pagination, $current_page, $take_count);
    }

    // Auth Error Response
    public function auth_error_response($resource_items, $total_items, $client_message, $has_pagination = true, $current_page = null, $take_count = null)
    {
        $message = $client_message;
        return $this->general_response($resource_items, $total_items, $message, $this->status_code_401, $has_pagination, $current_page, $take_count);
    }

    // Server Error Response
    public function server_error_response($resource_items, $total_items, $has_pagination = true, $current_page = null, $take_count = null)
    {
        $message = trans('messages.server_error!');
        return $this->general_response($resource_items, $total_items, $message, $this->status_code_500, $has_pagination, $current_page, $take_count);
    }
}
