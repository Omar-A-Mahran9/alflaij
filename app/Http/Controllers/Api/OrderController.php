<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use App\Models\Order;
use App\Models\CarOrder;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\CarColorImage;
use App\Rules\NotNumbersOnly;
use App\Traits\NotificationTrait;
use App\Models\Otp;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\OrderCarColorResource;
use App\Models\Service;

class OrderController extends Controller
{

    use NotificationTrait;

    public function getColorsByCarId($id)
    {
        try{
 
            
            
            
            
$car = Car::with('colors')->find($id);
$colors = $car->colors->unique('id');

                  return    OrderCarColorResource::collection($colors);

                 
             // if($colors->isEmpty())return $this->success(data:[],message:__("no data found"));
            // return $this->success(data:$colors );
        }catch(ModelNotFoundException $e){return $this->success(data:[],message:__("no data found"));}
    }
    public function allCar()
    {
        // $cars = Car::where('price_field_status',1)->get()->map(function($car){
        //     return [
        //         'id'=>$car->id,
        //         'name'=>$car->name." - ".$car->brand->name." - ".$car->model->name." - ".$car->year,
        //         'price'=>$car->price_after_vat
        //     ];
        // });
        $cars = Car::with(['brand', 'model'])  //  Eager load brand & model to prevent N+1 problem
        ->get()
        ->map(function ($car) {
        return [
            'id' => $car->id,
            'name'=>$car->name." - ".$car->brand->name." - ".$car->model->name." - ".$car->year,
            'price' => $car->price_field_status==1?$car->price_after_vat:0
        ];
    });
        if($cars->isEmpty()) return $this->success(data:[],message:__("no data found"));
        return $this->success(data:$cars);
    }
    private function sendOtp(Request $request , $phone , $order)
    {
        $request->validate([
            'phone' => ['required', 'string', 'regex:/^(05|5)\d{8}$/'],
        ]);
    
        $numbers = range(1, 100); // Create an array of numbers from 1 to 100
        shuffle($numbers); // Shuffle the array
        $otp = '1234';
    
        $uniqueNumbers = array_slice($numbers, 0, 4); // Get the first 4 numbers from the shuffled array
        // foreach ($uniqueNumbers as $number) {
        //     $lastDigit = $number % 10; // Get the last digit of the number
        //     $otp .= $lastDigit; // Append the last digit to the OTP
        // }

    
        // Ensure that the $phone being passed is used correctly, don't overwrite it
     
        // $bearer  = "8dee4f4224cbda8486d62a0e75f2194b" ;
        // $taqnyt = new TaqnyatSms($bearer);
        
        $checkOtps = Otp::where('phone',$phone)->get();
        foreach($checkOtps as $checkOtp){
            $checkOtp->delete();
        } 
 


        // Create the OTP record in the database
     Otp::create([
            'phone' => '+966' . $phone,  // Use the phone number passed to the function
            'otp' => $otp,
             'order_id' => $order,
        ]);
        $sender = "Nasser Matar El-Mutairi";
        $body = App()->getLocale() == 'ar' ? 'تم ارسال طلبك بنجاح الي شركة ناصر مطر المطيري برجاء ادخال رمز التحقق  : ' . $otp: 'Thank you for registering. Our verification code is : ' . $otp;
        // $message = $taqnyt->sendMsg($body, $phone, $sender);
 
     

        return $body;



       
    }
    private function distribute($order_id)
    {

        // Get all employees with the required role
        $employees = Employee::where('email', '!=', 'support@webstdy.com')
            ->whereHas('roles.abilities', function ($query) {
                $query->where('name', 'view_order_received');
            })
            ->get();
   
        $employeeCount = $employees->count();
          
        if ($employeeCount > 0) {
            // Get the current order
            $order = Order::find($order_id);
            
            if (!$order) {
                return; // Exit if order doesn't exist
            }
    
            // Find the employee with the least recent assignment
            $lastAssignedEmployee = Order::whereNotNull('employee_id')
                ->orderBy('updated_at', 'desc')
                ->first();
    
            // Determine the next employee in round-robin order
            $lastEmployeeIndex = $lastAssignedEmployee
                ? $employees->pluck('id')->search($lastAssignedEmployee->employee_id)
                : -1; // Start with -1 if no orders are assigned yet
    
            $nextEmployeeIndex = ($lastEmployeeIndex + 1) % $employeeCount;
    
           
            // Assign the order to the next employee
            $order->update(['employee_id' => $employees[$nextEmployeeIndex]->id]);
            $this->newOrderNotification($order,$employees[$nextEmployeeIndex]->id);

        }
    }
  
  
 


    public function index(Request $request)
    {

       

        $orders = Order::all();
           
        return response()->json($orders);
    }


    private function requestService(array $data)
    {
        // Format phone with '+966'
        $data['phone'] = '+966' . ltrim($data['phone']);
    
        // Set default status
        $data['status_id'] = 8;
    
        \App\Models\RequestService::create($data);
    }


    public function handleRequest(Request $request, $car, $services)
    {
        $phone = '+966' . ltrim($request->phone);
    
        foreach ($services as $service) {
            $this->requestService([
                'name'       => $request->name,
                'phone'      => $phone,
                'car_brand'  => $car->brand_id,
                'car_model'  => $car->model_id,
                'service_id' => $service->id,
                'city_id'    => $request->city_id,
            ]);
        }
    }
    



    public function individualsFinance(Request $request)
    {
     
         $request->validate([
             'car_id'=>['required','integer','exists:cars,id'],
             'color_id'    => ['required','exists:colors,id'],
            'name'=>['required','string'],
            'age'=>['required','integer'],
            'phone' => ['required', 'string', 'regex:/^(05|5)\d{8}$/'],
            'city_id'=>['required','integer','exists:cities,id'], 
            'salary'=>['required','integer'],
            'work'=>['required','string',new NotNumbersOnly()],
            'bank_id'=>['required','integer','exists:banks,id'],
            'having_loan'    =>['required', 'in:0,1'], 
            'driving_license' => ['required', Rule::in(['available', 'expired', 'doesnt_exist'])],
            'services' => ['sometimes', 'array','exists:services,id'],
        ]);


        $ids = isset($request->services[0])
        ? explode(',', $request->services[0])
        : [];

    $services = Service::whereIn('id', $ids)->get();

    $car = Car::select('id', 'price', 'brand_id', 'model_id', 'name_' . getLocale())
        ->where('id', $request->car_id)
        ->first();

    if (!$car) {
        throw ValidationException::withMessages([
            'car_id' => __("You must select a car")
        ]);
    }

    // Call your logic for creating request services
    $this->handleRequest($request, $car, $services);
            $order = Order::create([
                'car_id' => $request->car_id,
                'color_id' => $request->color_id,//
                'name' => $request->name,
                 'phone' => '+966'. $request->phone,            
                'city_id' => $request->city_id,

                'price' => $car->price_after_vat,
                'status_id' => 8,

                'car_name'=>$car->name,
            ]);
    
            $this->distribute($order->id);
            // $otp = $this->sendOtp($request, $request->phone,$order->id);

            $carOrder = CarOrder::create([
                'type' => 'individual',
                'payment_type' => 'finance',
                'salary' => $request->salary,
                'work' => $request->work,
                'bank_id' => $request->bank_id,
                'having_loan' => $request->having_loan,//
                'driving_license' => $request->driving_license,
                 


            ]);
    
     // return response 
    return response()->json([
        'message'=>'success',
        'data'=>new OrderResource($order),
        // 'otp'=>$otp,
    ]);
    
    
       
    }

    public function individualsCash(Request $request)
{
    $request->validate([
        'car_id'=>['required','integer','exists:cars,id'],
        'color_id'    => ['required','exists:colors,id'],
        'name'=>['required','string',new NotNumbersOnly()],
        'phone' => ['required', 'string', 'regex:/^(05|5)\d{8}$/'],

        'city_id'=>['required','integer','exists:cities,id'],
        'services' => ['sometimes', 'array','exists:services,id'],


       
    ]);
    $ids = isset($request->services[0])
    ? explode(',', $request->services[0])
    : [];

$services = Service::whereIn('id', $ids)->get();

$car = Car::select('id', 'price', 'brand_id', 'model_id', 'name_' . getLocale())
    ->where('id', $request->car_id)
    ->first();

if (!$car) {
    throw ValidationException::withMessages([
        'car_id' => __("You must select a car")
    ]);
}

// Call your logic for creating request services
$this->handleRequest($request, $car, $services);
$order = Order::create([
    'car_id' => $request->car_id,
    'color_id' => $request->color_id,
     'car_name'=>$car->name,
     'price' => $car->price_after_vat,
     'name'=>$request->name,
     'phone' => '+966'. $request->phone,
    'status_id' => 8,
    'city_id' => $request->city_id,

     
]);
$this->distribute($order->id);
// $otp = $this->sendOtp($request, $request->phone,$order->id);

$carOrder = CarOrder::create([
    'type' => 'individual',
    'payment_type' => 'cash',
    'order_id' => $order->id, 
    
]);




return response()->json([
    'message'=>'success',
    'data'=>$order,
    // 'otp'=>$otp

]);


}
    
public function companyFinance(Request $request)
{
    $request->validate([

        'car_id'=>['required','integer','exists:cars,id'],
        'color_id'    => ['required','exists:colors,id'],
        'quantity'=>['required','numeric'],
        'organization_name'=>['required','string',new NotNumbersOnly()],
        'organization_activity'=>['required','string',new NotNumbersOnly()],
        'organization_location'=>['required','string',new NotNumbersOnly()],
        'organization_seo'=>['required','string',new NotNumbersOnly()],
        'phone' => ['required', 'string', 'regex:/^(05|5)\d{8}$/'],
        'bank_id'=>['required','integer','exists:banks,id'],
        'services' => ['sometimes', 'array','exists:services,id'],



     ]);
     $ids = isset($request->services[0])
     ? explode(',', $request->services[0])
     : [];

 $services = Service::whereIn('id', $ids)->get();

 $car = Car::select('id', 'price', 'brand_id', 'model_id', 'name_' . getLocale())
     ->where('id', $request->car_id)
     ->first();

 if (!$car) {
     throw ValidationException::withMessages([
         'car_id' => __("You must select a car")
     ]);
 }

 // Call your logic for creating request services
 $this->handleRequest($request, $car, $services);
$order = Order::create([
    'car_id' => $request->car_id,
    'color_id' => $request->color_id,
    'price' => $car->price_after_vat * $request->quantity,
    'quantity' => $request->quantity,
    'phone' => '+966' . $request->phone,



    'car_name'=>$car->name,
    'name' => $request->organization_seo,
    'status_id' => 8,
     
]);

$this->distribute($order->id);
// $otp = $this->sendOtp($request, $request->phone,$order->id);

$carOrder = CarOrder::create([
    'type' => 'organization',
    'payment_type' => 'finance',
    'organization_name' => $request->organization_name,
    'organization_activity' => $request->organization_activity,
    'organization_location' => $request->organization_location,
    'organization_seo' => $request->organization_seo,
    'bank_id' => $request->bank_id,

    'order_id' => $order->id,   
]);




return response()->json([
    'message'=>'success',
    'data'=>$order,
    // 'otp'=>$otp
]);

}


public function companyCash(Request $request)
{
 
   
    $request->validate([
        'car_id'=>['required','integer','exists:cars,id'],
        'color_id'    => ['required','exists:colors,id'],
        'quantity'=>['required','numeric'],
        'organization_name'=>['required','string',new NotNumbersOnly()],
        'organization_activity'=>['required','string',new NotNumbersOnly()],
        'organization_location'=>['required','string',new NotNumbersOnly()],
        'organization_seo'=>['required','string',new NotNumbersOnly()],
        'phone' => ['required', 'string', 'regex:/^(05|5)\d{8}$/'],
        'organization_seo'=>['required','string',new NotNumbersOnly()],

        'services' => ['sometimes', 'array','exists:services,id'],
 
    ]);
    $car = Car::select('id', 'price', 'name_' . getLocale())
    ->where('id', $request->car_id)
    ->first();

    if (!$car) {
        throw ValidationException::withMessages([
            'car_id' => __("You must select a car")
        ]);
    }
  
    $order = Order::create([
        'car_id' => $request->car_id,
        'color_id' => $request->color_id,
        'price' => $request->quantity * $car->price_after_vat,
        'quantity' => $request->quantity,
        'phone' =>'+966' . $request->phone,


        'name'=>$request->organization_name,
        'car_name'=>$car->name,
        'status_id' => 8,
        
    ]);
$this->distribute($order->id);

    // $otp = $this->sendOtp($request, $request->phone,$order->id);

    $carOrder = CarOrder::create([
        'type' => 'organization',
        'payment_type' => 'cash',
        'organization_name'=>$request->organization_name,
        'organization_activity' => $request->organization_activity,
        'organization_location' => $request->organization_location,
        'organization_seo' => $request->organization_seo,
        'order_id'=>$order->id,


    ]);




    return response()->json([
        'message'=>'success',
        'data'=>$order,
 
        // 'otp'=>$otp
    ]);


}

}
