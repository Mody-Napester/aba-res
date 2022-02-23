<?php

namespace App\Http\Controllers\Monolithic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repositories\CourseRepositoryController;
use App\Http\Controllers\Repositories\InstructorRepositoryController;
use App\Http\Controllers\Repositories\MediaRepositoryController;
use App\Models\Instructor;
use Illuminate\Http\Request;

class CourseController extends Controller {

    public $repository;
    public $instructor;
    public $media;

    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->repository = new CourseRepositoryController('monolithic');
        $this->instructor = new InstructorRepositoryController('monolithic');
        $this->media = new MediaRepositoryController('monolithic');
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
            return view('@dashboard.course.index', $data);
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
            $data['instructors'] = $this->instructor->index(null)['data']['items'];
            $data['medias'] = $this->media->index(null)['data']['items'];
            return view('@dashboard.course.create', $data);
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
            return redirect(route('course.index'));
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
            $data['instructors'] = $this->instructor->index(null)['data']['items'];
            $data['medias'] = $this->media->index(null)['data']['items'];
            return view('@dashboard.course.edit', $data);
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
            return redirect(route('course.index'));
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
            return redirect(route('course.index'));
        }
    }
}

