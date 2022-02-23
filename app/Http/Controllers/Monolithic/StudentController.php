<?php

namespace App\Http\Controllers\Monolithic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\StudentRepositoryController;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public $repository;

    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->repository = new StudentRepositoryController('monolithic');
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
            return view('@dashboard.student.index', $data);
        }
    }

    /**
     * Create resource.
     */
    public function create(Request $request)
    {
        $return_data = $this->repository->create($request);
        if($return_data['status']['reason'] == 'permission_failed'){
            return redirect_permission_fail();
        }else{
            $data['resource'] = $return_data['data']['items'];
            return view('@dashboard.student.create', $data);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $return_data = $this->repository->store($request);
        if($return_data['status']['reason'] == 'permission_failed'){
            return redirect_permission_fail();
        }else{
            return redirect(route('student.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $uuid)
    {
        $return_data = $this->repository->edit($request, $uuid);
        if($return_data['status']['reason'] == 'permission_failed'){
            return redirect_permission_fail();
        }else{
            $data['resource'] = $return_data['data']['items'];
            return view('@dashboard.student.edit', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        $return_data = $this->repository->update($request, $uuid);
        if($return_data['status']['reason'] == 'permission_failed'){
            return redirect_permission_fail();
        }else{
            return redirect(route('student.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $uuid)
    {
        $return_data = $this->repository->destroy($request, $uuid);
        if($return_data['status']['reason'] == 'permission_failed'){
            return redirect_permission_fail();
        }else{
            return redirect(route('student.index'));
        }
    }
}

