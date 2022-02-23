<?php

//  Json Trans
function getTrans($json, $lang)
{
    if (!empty($json)) {
        $data = json_decode($json, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $data[$lang];
        }else{
            return $json;
        }
    } else {
        return '-';
    }
}

// Get Empty Json
function getEmptyJson()
{
    $return = '';
    foreach (lookups('languages') as $language){
        $return .= '"'. $language->name .'":"",';
    }
//    return '{' . $return . '}';
    return '{"ar":"","en":""}';
}

// Get path
function get_path($path){
    return base_path() . config('vars.public') . '/' . $path;
}

// Check Authority
function check_authority($authority){
    return \App\Models\User::has_permission($authority);
}

// Default PERMISSION fail redirect
function redirect_permission_fail(){
    return redirect('/');
}

// Default language
function lang(){
    return app()->getLocale();
}

// System languages
function langs($get = null){
    $languages = [];

    foreach (lookups('languages') as $language){
        if(is_null($get)){
            $languages[] = $language->name;
        }
        elseif ($get == 'display_name'){
            $languages[] = getTrans($language->display_name, lang());
        }
    }

    return $languages;
}

// get user id
function getCurrentUserId(){
    if(isset(request()->user)){
        return auth()->user()->id;
    }else{
        return auth()->user()->id;
    }
}

// Get lookup
function setAttributesTrans($attributes = []){
    $data = [];
    foreach ($attributes as $attribute){
        foreach (langs() as $lang) {
            $data[$attribute][$lang] = request()->input($attribute . '_' . $lang);
        }

        // Solve Arabic Problem
        $data[$attribute]['json'] = str_replace(json_encode(request()->input($attribute . '_ar')), '"'.request()->input($attribute . '_ar').'"',json_encode($data[$attribute]));
    }
    return $data;
}

// Get lookup
function lookup($by, $value){
    $results = null;
    $by_array = ['id','uuid','key','name','parent_id'];
    if (in_array($by, $by_array)){$results = \App\Models\Lookup::where($by, $value)->first();}
    return $results;
}

// Get lookups
function lookups($key){
    $lookup = \App\Models\Lookup::where('name', $key)->first();
    if($lookup){
        return \App\Models\Lookup::where('parent_id', $lookup->id)->get();
    }else{
        return null;
    }
}

// Custom Date
function custom_date($date){
    return date('d-m-Y, g:i:s a', strtotime($date));
}

// Human Date
function human_date($date){
    return Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
}

// Str Well
function str_well($value){
    return ucfirst(str_replace('_', ' ', $value));
}

// Upload files
function upload_file($type, $file, $path){

    $results = [
        'status' => false,
        'filename' => null,
        'mime' => null,
        'message' => null,
    ];

    $extension = strtolower($file->getClientOriginalExtension());

    if ($type == "image") {
        $validExtensions = ['jpg','png','gif'];
    }
    elseif ($type == "text") {
        $validExtensions = ['jpg','png','gif'];
    }
    elseif ($type == "video") {
        $validExtensions = ['mp4'];
    }
    elseif ($type == "book") {
        $validExtensions = ['pdf'];
    }

    if (in_array($extension, $validExtensions)) {

        $filename = time().rand(1000,9999).'.'.$extension;
        $destinationPath = get_path($path);

        $upload = $file->move($destinationPath, $filename);

        if ($upload) {
            // File Uploaded
            $results['status'] = true;
            $results['filename'] = $filename;
            $results['message'] = 'Uploaded Successfully';

            return $results;
        }else{
            // Error Uploading
            $results['message'] = 'Error Uploading';

            return $results;
        }

    }else{
        // File not valid
        $results['message'] = 'File not valid';

        return $results;
    }
}
