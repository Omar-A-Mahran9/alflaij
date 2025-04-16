<?php

namespace App\Http\Controllers\Api;

use App\Models\Career;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\StoreApplicantRequest;
use App\Http\Resources\CareerResource;

class CareerController extends Controller
{
    public function index()
    {
         try
        {
            $careers = Career::with('city')->where('status', 1)->get();
            return  CareerResource::collection($careers);
            // return $this->success(data: $careers);
        } catch (\Exception $e)
        {
            return $this->failure(message: $e->getMessage());
        }
    }
    public function store(Request $request, $career_id)
    {
        $request->merge(['career_id' => $career_id]);
        $data = $request->validate([
            'name' => ['bail', 'required', 'string', 'min:10', 'max:255'],
            'email' => ['bail', 'required', 'email:rfc,dns', 'max:255'],
            'phone' => ['bail', 'required', 'regex:/^((\+|00)966|0)?5[0-9]{8}$/'],
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'], // 2MB max
            'career_id' => ['bail', 'required', 'exists:careers,id'],
        ]);
        $data['phone'] = convertArabicNumbers($data['phone']);
        if ($request->file('cv'))
            $data['cv'] = uploadImage($request->file('cv'), "Applicants");
        Applicant::create($data);
        return  response()->json([
            "success"=> true,
            "message"=> __('تمت العملية بنجاح')
        ]);
    }
}
