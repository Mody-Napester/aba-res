<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Company;
use App\Models\Lookup;
use App\Models\PermissionGroup;

trait RequestHelperTrait {

    public function get_data($collection, $request, array $filter_data){

        // Get Total
        $total = ($collection != '')? $collection->count() : 0;

        // Set the collection
        $resources = $collection;

        // Set has-pagination
        $has_pagination = false;

        // Handel Pagination
        if($request->has('take') && $request->has('page')){
            $take = $request->take;
            if($request->page == 0){
                $skip = 0;
            }else{
                $skip = $request->take * ($request->page - 1);
            }

            $resources = $resources->skip($skip)->take($take);

            $has_pagination = true;
        }

        // Handel Filters
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
                elseif($operation == 'account_uuid')
                {
                    $account = Account::getOneBy('uuid', $request->input($input));
                    if($account){
                        $resources = $resources->where('account_id', $account->id);
                    }
                }
                elseif($operation == 'company_uuid')
                {
                    $company = Company::getOneBy('uuid', $request->input($input));
                    if($company){
                        $resources = $resources->where('company_id', $company->id);
                    }
                }
            }
        }

        return [
            'has_pagination' => $has_pagination,
            'page' => ($has_pagination)? $request->page : null,
            'take' => ($has_pagination)? $take : null,
            'resources' => $resources,
            'total' => $total,
        ];

    }

}
