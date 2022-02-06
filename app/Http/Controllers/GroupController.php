<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Group;
use App\Models\Screen;
use Illuminate\Http\Request;

class GroupController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!check_authority('list.group')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resources'] = Group::all();
        $data['screens'] = Screen::all();
        return view('@dashboard.group.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!check_authority('add.group')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check validation
        $request->validate([
            'name' => 'required|string|unique:groups',
            'screens' => 'required',
        ]);

        $fields = [
            'name' => ($request->has("name")) ? $request->name : '',
            'created_by' => auth()->user()->id,
        ];

        // Do Code
        $resource = Group::store($fields);

        // Add Actions
        if($request->has('screens')){
            foreach ($request->screens as $screen_uuid => $action_uuids){
                $screen = Screen::getBy('uuid', $screen_uuid);

                if($screen){
                    foreach ($action_uuids as $action_uuid){
                        $action = Action::getBy('uuid', $action_uuid);
                        $resource->screens()->attach($screen->id, [
                            'action_id' => $action->id
                        ]);
                    }
                }
            }
        }

        // Return
        if($resource){
            toastr()->success(trans('messages.Created_successfully'));
            return redirect(route('group.index'));
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
        if(!check_authority('edit.group')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resource'] = Group::getBy('uuid', $uuid);
        $data['screens'] = Screen::all();
        return view('@dashboard.group.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        if(!check_authority('edit.group')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check Resource
        $resource = Group::getBy('uuid', $uuid);
        if(!$resource){
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
            'screens' => 'required',
        ]);

        // Check in name already taken
        if(Group::where('name', $request->name)->where('id', "<>", $resource->id)->first()){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'updated_by' => auth()->user()->id,
        ];

        $updatedResource = Group::edit($fields, $resource->id);

        // Add Actions
        if($request->has('screens')){
            $resource->screens()->detach();

            foreach ($request->screens as $screen_uuid => $action_uuids){
                $screen = Screen::getBy('uuid', $screen_uuid);

                if($screen){
                    foreach ($action_uuids as $action_uuid){
                        $action = Action::getBy('uuid', $action_uuid);
                        $resource->screens()->attach($screen->id, [
                            'action_id' => $action->id
                        ]);
                    }
                }
            }
        }

        // Return
        if($updatedResource){
            toastr()->success(trans('messages.Updated_successfully'));
            return redirect(route('group.index'));
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
        if(!check_authority('delete.group')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $resource = Group::getBy('uuid', $uuid);

        if($resource){
            $deletedResource = Group::remove($resource->id);

            // Return
            if ($deletedResource){
                toastr()->success(trans('messages.Deleted_successfully'));
                return redirect(route('group.index'));
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
