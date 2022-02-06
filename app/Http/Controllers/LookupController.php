<?php

namespace App\Http\Controllers;

use App\Models\Lookup;
use Illuminate\Http\Request;

class LookupController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!check_authority('list.lookup')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resources'] = Lookup::all();
        $data['parents'] = Lookup::where('parent_id', 0)->get();
        return view('@dashboard.lookup.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!check_authority('add.lookup')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check validation
        $request->validate([
            'name' => 'required|string|unique:lookups',
            'parent' => 'required',
        ]);

        // Check in name already taken
        if(Lookup::getBy('name', $request->name)){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        // Check Parent
        $parent = Lookup::where('parent_id', 0)->where('uuid', $request->parent)->first();
        if($request->parent != 0){
            if(!$parent){
                toastr()->error(trans('messages.parent_not_exists'));
                return back();
            }
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : '',
            'parent_id' => ($request->has("parent")) ? $parent->id : 0,
            'created_by' => auth()->user()->id,
        ];

        // Do Code
        $resource = Lookup::store($fields);

        // Return
        if($resource){
            toastr()->success(trans('messages.Created_successfully'));
            return redirect(route('lookup.index'));
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
        if(!check_authority('edit.lookup')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resource'] = Lookup::getBy('uuid', $uuid);
        $data['parents'] = Lookup::where('parent_id', 0)->get();
        return view('@dashboard.lookup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        if(!check_authority('edit.lookup')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check Resource
        $resource = Lookup::getBy('uuid', $uuid);
        if(!$resource){
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
            'parent' => 'required',
        ]);

        // Check in name already taken
        if(Lookup::where('name', $request->name)->where('id', "<>", $resource->id)->first()){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        // Check Parent
        $parent = Lookup::where('parent_id', 0)->where('uuid', $request->parent)->first();
        if($request->parent != 0){
            if(!$parent){
                toastr()->error(trans('messages.parent_not_exists'));
                return back();
            }
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'parent_id' => ($request->has("parent")) ? $parent->id : $resource->parent_id,
            'updated_by' => auth()->user()->id,
        ];

        $updatedResource = Lookup::edit($fields, $resource->id);

        // Return
        if($updatedResource){
            toastr()->success(trans('messages.Updated_successfully'));
            return redirect(route('lookup.index'));
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
        if(!check_authority('delete.lookup')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $resource = Lookup::getBy('uuid', $uuid);

        if($resource){
            $deletedResource = Lookup::remove($resource->id);

            // Return
            if ($deletedResource){
                toastr()->success(trans('messages.Deleted_successfully'));
                return redirect(route('lookup.index'));
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
