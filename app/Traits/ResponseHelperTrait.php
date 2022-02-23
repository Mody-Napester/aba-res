<?php

namespace App\Traits;

trait ResponseHelperTrait
{
    public $response_type;

    // Return General Response
    public function general_response($client_message, $resource_items = false, $total_items = 0, $show_message = true)
    {
        if($resource_items == false){
            $items = [];
        }else{
            $items = $resource_items;
        }

        $data = [
            'status' => $client_message['status'],
            'data' => [
                'items' => $items,
                'count' => $total_items,
            ],
        ];

        // Microservice
        if($this->response_type == 'microservice'){
            return response($data, $client_message['status']['code']);
        }
        // Default Monolithic
        else {
            if($show_message){
                // The Return Message
                if($client_message['status']['type'] == 'success'){
                    toastr()->success($client_message['status']['message']);
                }
                elseif($client_message['status']['type'] == 'error'){
                    toastr()->error($client_message['status']['message']);
                }
                elseif($client_message['status']['type'] == 'warning'){
                    toastr()->warning($client_message['status']['message']);
                }
                elseif($client_message['status']['type'] == 'info'){
                    toastr()->info($client_message['status']['message']);
                }
            }

            // The Return
            return $data;
        }
    }
}
