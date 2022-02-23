<?php

namespace App\Http\Controllers\Monolithic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\CourseRepositoryController;
use App\Http\Controllers\Repositories\SessionRepositoryController;
use Illuminate\Http\Request;

class SessionController extends Controller {

    public $repository;
    public $course;

    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->repository = new SessionRepositoryController('monolithic');
        $this->course = new CourseRepositoryController('monolithic');
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
            return view('@dashboard.session.index', $data);
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
            $data['courses'] = $this->course->index(null)['data']['items'];
            return view('@dashboard.session.create', $data);
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
            return redirect(route('session.index'));
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
            $data['courses'] = $this->course->index(null)['data']['items'];
            return view('@dashboard.session.edit', $data);
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
            return redirect(route('session.index'));
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
            return redirect(route('session.index'));
        }
    }
}

