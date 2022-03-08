<?php

namespace App\Http\Controllers\Monolithic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\ConsultationRepositoryController;
use Illuminate\Http\Request;

class ConsultationController extends Controller {

    public $repository;

    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->repository = new ConsultationRepositoryController('monolithic');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $return_data = $this->repository->index($request);
        if($return_data['status']['reason'] == 'permission_failed'){
            return redirect_permission_fail();
        }else{
            $data['resources'] = $return_data['data']['items'];
            return view('@dashboard.consultation.index', $data);
        }
    }
}

