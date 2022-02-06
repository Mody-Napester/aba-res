<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!check_authority('list.action')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resources'] = Action::all();
        return view('@dashboard.action.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!check_authority('add.action')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check validation
        $request->validate([
            'name' => 'required|string|unique:actions',
        ]);

        $fields = [
            'name' => ($request->has("name")) ? $request->name : '',
            'created_by' => auth()->user()->id,
        ];

        // Do Code
        $resource = Action::store($fields);

        // Return
        if($resource){
            toastr()->success(trans('messages.Created_successfully'));
            return redirect(route('action.index'));
        }else{
            toastr()->error(trans('messages.Error_Please_try_again'));
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        if(!check_authority('edit.action')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resource'] = Action::getBy('uuid', $uuid);
        return view('@dashboard.action.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        if(!check_authority('edit.action')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check Resource
        $resource = Action::getBy('uuid', $uuid);
        if(!$resource){
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
        ]);

        // Check in name already taken
        if(Action::where('name', $request->name)->where('id', "<>", $resource->id)->first()){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'updated_by' => auth()->user()->id,
        ];

        $updatedResource = Action::edit($fields, $resource->id);

        // Return
        if($updatedResource){
            toastr()->success(trans('messages.Updated_successfully'));
            return redirect(route('action.index'));
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
        if(!check_authority('delete.action')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $resource = Action::getBy('uuid', $uuid);

        if($resource){
            $deletedResource = Action::remove($resource->id);

            // Return
            if ($deletedResource){
                toastr()->success(trans('messages.Deleted_successfully'));
                return redirect(route('action.index'));
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
