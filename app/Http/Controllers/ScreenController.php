<?php

namespace App\Http\Controllers;

use App\Models\Screen;
use Illuminate\Http\Request;
use App\Models\Action;

class ScreenController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!check_authority('list.screen')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resources'] = Screen::all();
        $data['actions'] = Action::all();
        return view('@dashboard.screen.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!check_authority('add.screen')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check validation
        $request->validate([
            'name' => 'required|string|unique:screens',
            'actions' => 'required',
        ]);

        $fields = [
            'name' => ($request->has("name")) ? $request->name : '',
            'created_by' => auth()->user()->id,
        ];

        // Do Code
        $resource = Screen::store($fields);

        // Add Actions
        if($request->has('actions')){
            foreach ($request->actions as $action){
                $ac = Action::getBy('uuid', $action);
                if($ac){
                    $resource->actions()->attach($ac->id);
                }
            }
        }

        // Return
        if($resource){
            toastr()->success(trans('messages.Created_successfully'));
            return redirect(route('screen.index'));
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
        if(!check_authority('edit.screen')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resource'] = Screen::getBy('uuid', $uuid);
        $data['actions'] = Action::all();
        return view('@dashboard.screen.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        if(!check_authority('edit.screen')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check Resource
        $resource = Screen::getBy('uuid', $uuid);
        if(!$resource){
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
            'actions' => 'required',
        ]);

        // Check in name already taken
        if(Screen::where('name', $request->name)->where('id', "<>", $resource->id)->first()){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'updated_by' => auth()->user()->id,
        ];

        $updatedResource = Screen::edit($fields, $resource->id);

        // Add Actions
        if($request->has('actions')){
            $resource->actions()->detach();
            foreach ($request->actions as $action){
                $ac = Action::getBy('uuid', $action);
                if($ac){
                    $resource->actions()->attach($ac->id);
                }
            }
        }

        // Return
        if($updatedResource){
            toastr()->success(trans('messages.Updated_successfully'));
            return redirect(route('screen.index'));
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
        if(!check_authority('delete.screen')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $resource = Screen::getBy('uuid', $uuid);

        if($resource){
            $deletedResource = Screen::remove($resource->id);

            // Return
            if ($deletedResource){
                toastr()->success(trans('messages.Deleted_successfully'));
                return redirect(route('screen.index'));
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
