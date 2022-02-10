<?php
namespace App\Traits;

trait GeneralHelperTrait {

    // Get Model By Parameters
    public function getFromModelByParameters($model, $parameters = []){
        $result = $model;
        foreach ($parameters as $field => $value){
            $result = $result->where($field, $value);
        }
        return $result;
    }
}
