<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!check_authority('list.user')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resources'] = User::all();
        $data['groups'] = Group::all();
        return view('@dashboard.user.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!check_authority('add.user')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users'
        ]);

        $fields = [
            'name' => ($request->has("name")) ? $request->name : '',
            'email' => ($request->has("email")) ? $request->email : '',
            'password' => Hash::make($request->password),
        ];

        // Do Code
        $resource = User::store($fields);

        // Add groups
        if($request->has('groups')){
            foreach ($request->groups as $group_uuid){
                $group = Group::getBy('uuid', $group_uuid);
                if($group){
                    $resource->groups()->attach($group->id);
                }
            }
        }

        // Return
        if($resource){
            toastr()->success(trans('messages.Created_successfully'));
            return redirect(route('user.index'));
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
        if(!check_authority('edit.user')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $data['resource'] = User::getBy('uuid', $uuid);
        $data['groups'] = Group::all();
        return view('@dashboard.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        if(!check_authority('edit.user')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        // Check Resource
        $resource = User::getBy('uuid', $uuid);
        if(!$resource){
            toastr()->error(trans('messages.Resource_not_found'));
            return back();
        }

        // Check validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        // Check in name already taken
        if(User::where('email', $request->email)->where('id', "<>", $resource->id)->first()){
            toastr()->error(trans('messages.already_exists'));
            return back();
        }

        $fields = [
            'name' => ($request->has("name")) ? $request->name : $resource->name,
            'email' => ($request->has("email")) ? $request->email : $resource->email,
            'password' => ($request->has("password") && $request->password != '') ? Hash::make($request->password) : $resource->password,
        ];

        $updatedResource = User::edit($fields, $resource->id);

        // Add groups
        if($request->has('groups')){
            foreach ($request->groups as $group_uuid){
                $group = Group::getBy('uuid', $group_uuid);
                if($group){
                    $resource->groups()->attach($group->id);
                }
            }
        }

        // Return
        if($updatedResource){
            toastr()->success(trans('messages.Updated_successfully'));
            return redirect(route('user.index'));
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
        if(!check_authority('delete.user')){
            toastr()->error(trans('messages.you_dont_have_permissions'));
            return redirect('/');
        }

        $resource = User::getBy('uuid', $uuid);

        if($resource){
            $deletedResource = User::remove($resource->id);

            // Return
            if ($deletedResource){
                toastr()->success(trans('messages.Deleted_successfully'));
                return redirect(route('user.index'));
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
