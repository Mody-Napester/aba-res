<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Traits\MessagesHelperTrait;
use Illuminate\Http\Request;

class CourseRepositoryController extends Controller
{
    use MessagesHelperTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Check Permissions
        if(!check_authority('list.instructor')){
            $data = $this->fail_permission();
        }else{
            // Get All Resource
            $data = $this->success_list();
            $data['resources'] = Course::getAll();
        }
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        if(!check_authority('add.instructor')){
            $data = $this->fail_permission();
        }
        else {
            $name = [];
            $speciality = [];
            $details = [];

            foreach (langs("short_name") as $lang) {
                $name[$lang] = $request->input('name_' . $lang);
                $speciality[$lang] = $request->input('speciality_' . $lang);
                $details[$lang] = $request->input('details_' . $lang);
            }

            // Solve Arabic Problem
            $name_json = str_replace(json_encode($name['ar']), '"'.$name['ar'].'"',json_encode($name));
            $speciality_json = str_replace(json_encode($speciality['ar']), '"'.$speciality['ar'].'"',json_encode($speciality));
            $details_json = str_replace(json_encode($details['ar']), '"'.$details['ar'].'"',json_encode($details));

            $fields = [
                'name' => ($request->has("name")) ? $name_json : '',
                'speciality' => ($request->has("speciality")) ? $speciality_json : '',
                'details' => ($request->has("details")) ? $details_json : '',
                'phone' => ($request->has("phone")) ? $request->phone : '',
                'email' => ($request->has("email")) ? $request->email : '',
                'avatar' => ($request->has("avatar")) ? $request->avatar : '',
                'is_active' => ($request->has("is_active") && $request->is_active == 1) ? 1 : 0,
                'created_by' => auth()->user()->id,
            ];

            // Do Code
            $resource = Course::store($fields);

            // Return
            if($resource){
                $data = $this->success_create();
                $data['resource'] = $resource;
            }else{
                $data = $this->fail_create();
            }
        }
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        if(!check_authority('edit.instructor')){
            $data = $this->fail_permission();
        }else{
            $data['resource'] = Course::getBy('uuid', $uuid);
            if($data['resource']){
                $data = $this->success_edit();
            }else{
                $data = $this->fail_edit();
            }
        }
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        if(!check_authority('edit.instructor')){
            $data = $this->fail_permission();
        }

        // Check Resource
        $resource = Course::getBy('uuid', $uuid);
        if(!$resource){
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
        ]);

        // Check in name already taken
        if(Course::where('name', $request->name)->where('id', "<>", $resource->id)->first()){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'updated_by' => auth()->user()->id,
        ];

        $updatedResource = Course::edit($fields, $resource->id);

        // Return
        if($updatedResource){
            toastr()->success(trans('messages.Updated_successfully'));
            return redirect(route('instructor.index'));
        }else{
            toastr()->error(trans('messages.Error_Please_try_again'));
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        if(!check_authority('delete.instructor')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $resource = Course::getBy('uuid', $uuid);

        if($resource){
            $deletedResource = Course::remove($resource->id);

            // Return
            if ($deletedResource){
                toastr()->success(trans('messages.Deleted_successfully'));
                return redirect(route('instructor.index'));
            }else{
                toastr()->error(trans('messages.Can_not_deleted'));
                return back();
            }
        }else{
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }
    }
}

