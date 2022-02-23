<?php

namespace App\Traits;

use App\Models\Lookup;

trait RequestHelperTrait {

    public function get_data($collection, $request = null, array $filter_data = []){

        // Set the collection
        $resources = $collection;

        // Handel Filters
        if(!is_null($request)){
            foreach ($filter_data as $input => $operation){
                if ($request->has($input) && !empty($request->input($input))) {
                    if($operation == 'like'){
                        $resources = $resources->where($input, $operation, "%" . $request->input($input) . "%");
                    }
                    elseif($operation == 'parent_name') // Lookups
                    {
                        $parent = Lookup::getOneBy('name', $request->input($input));
                        if($parent){
                            $resources = $resources->where('parent_id', $parent->id);
                        }
                    }
                }
            }
        }

        return [
            'resources' => $resources,
        ];

    }

}
