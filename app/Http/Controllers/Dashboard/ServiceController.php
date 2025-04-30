<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Rules\ExistButDeleted;
use App\Rules\NotNumbersOnly;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view_services');

        if ($request->ajax())
        {
            $data = getModelData( model: new Service() );

            return response()->json($data);
        }

        return view('dashboard.services.index');
    }

    public function create()
    {
        $this->authorize('create_services');

        return view('dashboard.services.create');
    }


    public function edit(Service $service)
    {
        $this->authorize('update_services');

        return view('dashboard.services.edit',compact('service'));
    }


    public function show(Service $service)
    {
        $this->authorize('show_services');

        return view('dashboard.services.show',compact('service'));
    }

    public function store(Request $request)
    {
        $this->authorize('create_services');

        $data = $request->validate([
            'name_ar'           =>[ 'required', ' string' ,'  max:255' ,' unique:services' , new ExistButDeleted(new Service())],
            'name_en'           => [ 'required', ' string' ,'  max:255' ,' unique:services' , new ExistButDeleted(new Service())],
            'title_ar'          => 'nullable | string |  max:255',
            'title_en'          => 'nullable | string |  max:255',
            'description_ar'    => 'required | string',
            'description_en'    => 'required | string',
            'image'             => ['nullable' , 'mimes:webp,jpeg,png','max:600'] ,
            'price'             => 'required | integer | not_in:0',
            'discount_price'    => 'nullable | integer | not_in:0',

        ]);

        
        if ($request->file('image'))
            $data['image'] = uploadImage( $request->file('image') , "Services");
         $service=Service::create($data);
 

    }

    public function update(Request $request , Service $service)
    {
        $this->authorize('update_services');

        $data = $request->validate([
            'name_ar'           => ['required' , 'string' ,  'max:255',   Rule::unique('services', 'name_ar')->ignore($service->id) ,new ExistButDeleted(new Service())], 
            'name_en'           => ['required' , 'string' ,  'max:255', Rule::unique('services', 'name_ar')->ignore($service->id) ,new ExistButDeleted(new Service())],
            'title_ar'          => 'nullable | string |  max:255',
            'title_en'          => 'nullable | string |  max:255',
            'description_ar'    => 'required | string',
            'description_en'    => 'required | string',
            'image'             => ['nullable' , 'mimes:webp,jpeg,png','max:600'] ,
            'price'             => 'required | integer | not_in:0',
            'discount_price'    => 'nullable | integer | not_in:0',
         ]);

         if ($request->file('image'))
        {
            deleteImage( $service['image'] , "Services");
            $data['image'] = uploadImage( $request->file('image') , "Services");
        }
         $service->update($data);
     }


    public function destroy(Request $request, Service $service)
    {
        $this->authorize('delete_services');

        if($request->ajax())
        {
           
            $service->delete();
        }
    }
    private function prepareFeatures($features)
    {
        return collect($features)->map(function ($feature) {
            return [
                'feature_id' => $feature['id'] ?? null,
                'description_ar' => $feature['description_ar'] ?? null,
                'description_en' => $feature['description_en'] ?? null,
            ];
        })->toArray();
    }
}
