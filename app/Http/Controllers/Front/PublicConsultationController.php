<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Instructor;
use App\Traits\MessagesHelperTrait;
use App\Traits\RequestHelperTrait;
use App\Traits\ResponseHelperTrait;
use Illuminate\Http\Request;

class PublicConsultationController extends Controller
{
    use MessagesHelperTrait, RequestHelperTrait, ResponseHelperTrait;

    // create
    public function create(){
        return view('@public.consultation.create');
    }

    // store
    public function store(Request $request){

        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        // Image
        $filename = null;
        if ($request->hasFile("file")) {
            $upload = upload_file('image', $request->file('file'), 'assets_public/images');
            if ($upload['status'] == true) {
                $filename = $upload['filename'];
            }else{
                return $this->general_response($this->fail_general_message($upload['message']));
            }
        }

        $fields = [
            'name' => ($request->has("name") && $request->name != '') ? $request->name : '',
            'email' => ($request->has("email") && $request->email != '') ? $request->email : '',
            'phone' => ($request->has("phone") && $request->phone != '') ? $request->phone : '',
            'country' => ($request->has("country") && $request->country != '') ? $request->country : '',
            'speciality' => ($request->has("speciality") && $request->speciality != '') ? $request->speciality : '',
            'degree' => ($request->has("degree") && $request->degree != '') ? $request->degree : '',
            'details' => ($request->has("details") && $request->details != '') ? $request->details : '',
            'file' => $filename,
            'created_by' => getCurrentUserId(),
        ];

        $con = Consultation::create($fields);

        if($con){
            return back();
        }else{
            return back();
        }
    }
}
