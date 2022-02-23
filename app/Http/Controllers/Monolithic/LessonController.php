<?php

namespace App\Http\Controllers\Monolithic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\LessonRepositoryController;
use App\Http\Controllers\Repositories\SessionRepositoryController;
use Illuminate\Http\Request;

class LessonController extends Controller {

    public $repository;
    public $session;

    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->repository = new LessonRepositoryController('monolithic');
        $this->session = new SessionRepositoryController('monolithic');
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
            return view('@dashboard.lesson.index', $data);
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
            $data['sessions'] = $this->session->index(null)['data']['items'];
            return view('@dashboard.lesson.create', $data);
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
            return redirect(route('lesson.index'));
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
            $data['sessions'] = $this->session->index(null)['data']['items'];
            return view('@dashboard.lesson.edit', $data);
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
            return redirect(route('lesson.index'));
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
            return redirect(route('lesson.index'));
        }
    }
}

