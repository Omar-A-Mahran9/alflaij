<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BranResourse;
use App\Http\Resources\CarResource;
use App\Http\Resources\CarResourse;
use App\Http\Resources\ColorResourse;
use App\Http\Resources\ModelResourse;
use App\Models\Bank;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarColorImage;
use App\Models\CarModel;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Nationality;
use App\Models\Order;
use App\Models\Organizationactive;
use App\Models\OrganizationType;
use App\Models\Sector;
use App\Models\Tag;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CarController extends Controller
{
   
    public function carsdetails(){
        
        $cars = Car::orderBy('created_at', 'desc')->get();
        $data=CarResourse::collection( $cars );
        return $this->success(data: $data);

    }
    public function cardetails($id){
        try{
            $car=Car::findOrFail($id);
            return new CarResourse($car);
        }catch(ModelNotFoundException $e)
        {return $this->failure(__("No data"));}
    }
    
    public function cartype(){
        $data=[
            'New'=>1,
            'Old'=>0
        ];
        return $this->success(data: $data);
    }


    public function carmodel(){
        $model=CarModel::get();
        $data=ModelResourse::collection( $model );
        return $this->success(data: $data);
    }

    public function CarOption(){
        $organizationTypes = OrganizationType::get();
        $type = $organizationTypes->map(function ($organizationType) {
            return [
                'id' => $organizationType->id,
                'title' => $organizationType->title,
            ];
        })->toArray();

        $organizationActives = Organizationactive::get();
        $Active = $organizationActives->map(function ($organizationActive) {
             return [
                'id' => $organizationActive->id,
                'title' => $organizationActive->title,
            ];
        })->toArray();

        $cars=Car::get();
        $maxPrice = $cars->max('price');
        $minPrice = $cars->min('price');
        $brands = Brand::select('id','image','name_en','name_ar', 'car_available_types' )->has('cars')->whereHas('models.cars')->whereNotNull('car_available_types')->get();
        $allbrands = Brand::select('id','image','name_en','name_ar', 'car_available_types' )->get();
        $color=Color::get(); 
        $model=CarModel::has('cars')->get();
        $ModelData=ModelResourse::collection( $model );
        $ColorData = ColorResourse::collection( $color);
        $BrandData = BranResourse::collection( $brands );
        $BrandsData = BranResourse::collection( $allbrands );
        $nationality = Nationality::get();
        $city=City::get();
        $category=Category::get();
        $tags=Tag::get();

        $tagss = $tags->map(function ($tags) {
            return [
                'id' => $tags->id,
                'title' => $tags->name,
            ];
        })->toArray();

        $nationalitydata = $nationality->map(function ($nationality) {
            return [
                'id' => $nationality->id,
                'title' => $nationality->name,
            ];
        })->toArray();

        $citydata = $city->map(function ($city) {
            return [
                'id' => $city->id,
                'title' => $city->name,
            ];
        })->toArray();
        $categorydata = $category->map(function ($category) {
            return [
                'id' => $category->id,
                'title' => $category->name,
            ];
        })->toArray();

          $years = Car::distinct()->pluck('year')->sortBy(function ($year) {
            return (int) $year;
        })->values()->toArray();     

////////
        $car=Car::where('publish',1)->where('show_in_home_page', 1)->get();
        $currentYear = now()->year;
        $yearsRange = range(2010, $currentYear);
        $carCountsPerYear = [];

        foreach ($yearsRange as $year) {
            $count = Car::where('year', $year)->count();
            $carCountsPerYear[] = [
                'year' => $year,
                'count' => $count,
            ];
        }
        $usedCount = $car->where('is_new', '0')->count();
        $newCount = $car->where('is_new', '1')->count();
        $automatic_gear = $car->where('gear_shifter', 'automatic')->count();
        $manual_gear = $car->where('gear_shifter', 'manual')->count();
        $gasoline_type = $car->where('fuel_type', 'gasoline')->count();
        $diesel_type = $car->where('fuel_type', 'diesel')->count();
        $electric_type = $car->where('fuel_type', 'electric')->count();
        $hybrid_type = $car->where('fuel_type', 'hybrid')->count();

        $hatchback_shape = $car->where('car_body', 'hatchback')->count();
        $sedan_shape = $car->where('car_body', 'sedan')->count();
        $four_wheel_drive_shape = $car->where('car_body', 'four-wheel-drive')->count();
        $commercial_shape = $car->where('car_body', 'commercial')->count();
        $family_shape = $car->where('car_body', 'family')->count();

        $ranges = [
            0 => [800, 1200],
            1 => [1300, 1400],
            2 => [1500, 1600],
            3 => [1800, 2000],
            4 => [2200, 3000],
            5 => 'greater_than_3000', // Special case for > 3000
        ];
        
        $fuel_tank_capacity_results = [];
        
        foreach ($ranges as $index => $range) {
            // For each range, we'll count the cars that fit the criteria
            if ($range === 'greater_than_3000') {
                $count = Car::where('engine_capacity', '>', 3000)->where('publish',1)->where('show_in_home_page', 1)->count();
                $title = 'More than 3000';
            } else {
                $count = Car::whereBetween('engine_capacity', $range)->where('publish',1)->where('show_in_home_page', 1)->count();
                $title = "{$range[0]} - {$range[1]}";
            }
        
            $fuel_tank_capacity_results[] = [
                'title' => $title,
                'car_count' => $count,
            ];
        }
 
        $data = [
            'brands' => $BrandData,
            'allbrands'=>$BrandsData,
            'colors' => $ColorData,
            'models'=> $ModelData,
            'gear_shifter'=>[
                'manual',
                'automatic'
            ],
            'statue'=>[
                1=>'New',
                0=>'Used'
            ],
            'fuel_type'=>[
                'gasoline', 'diesel', 'electric', 'hybrid'
            ],
            'supplier'=>[
                'gulf', 'saudi'
            ],
            'supplier_english'=>[
                'gulf', 'saudi'
            ],
            'tags'=> $tagss ,
            'Slider'=>[
                'maxPrice'=>$maxPrice,
                'minPrice'=>$minPrice
            ],
            'Car_style'=>[
                'hatchback', 'sedan', 'four-wheel-drive', 'commercial','family'
            ],
            'Category'=>$categorydata,
            'City'=>$citydata,
           
            'banks'=>Bank::where('type','bank')->get()->toArray(),
            'year'=>$years,
            
            'OrganizationType'=> $type,
            'OrganizationActive'=>$Active,
            'nationalities'=> $nationalitydata,
            'car_counts'=>[
                'used' => $usedCount,
                'new' => $newCount,
                'automatic'=>$automatic_gear,
                'manual'=>$manual_gear,
                'gasoline_type'=>$gasoline_type,
                'diesel_type'=>$diesel_type,
                'electric_type'=>$electric_type,
                'hybrid_type'=>$hybrid_type,
                'hatchback_shape'=>$hatchback_shape,
                'sedan_shape'=>$sedan_shape,
                'four_wheel_drive_shape'=>$four_wheel_drive_shape,
                'commercial_shape'=>$commercial_shape,
                'family_shape'=>$family_shape,
                'years'=> $carCountsPerYear,
                'fuel_capacity'=>$fuel_tank_capacity_results,



            ]

           
        ];
        return $this->success(data: $data);
    }


    public function filter(){
      
        if (request()->has('search')) {
             $searchKeyword = request()->input('search');
             $query = Car::query();
     
            $query->where(function ($query) use ($searchKeyword) {
                $query->where('name_ar', 'LIKE', "%$searchKeyword%")
                ->orWhere('name_en', 'LIKE', "%$searchKeyword%")->orWhere('description_ar','LIKE', "%$searchKeyword%")->orWhere('description_en', "%$searchKeyword%");
            });
    
            if ($searchKeyword) {
                $query->with('brand')->orWhereHas('brand', function ($brandQuery) use ($searchKeyword) {
                    $brandQuery->where('name_ar', 'LIKE', "%$searchKeyword%")->orWhere('name_en','LIKE',"%$searchKeyword%")->orWhere('meta_desc_en','LIKE', "%$searchKeyword%")->orWhere('meta_keyword_ar', "%$searchKeyword%")->orWhere('meta_keyword_ar', "%$searchKeyword%");
                });
            }
        
            if ($searchKeyword) {
                $query->with('model')->orWhereHas('model', function ($modelQuery) use ($searchKeyword) {
                    $modelQuery->where('name_ar', 'LIKE', "%$searchKeyword%")->orWhere('name_en','LIKE',"%$searchKeyword%")->orWhere('meta_keyword_ar','LIKE',"%$searchKeyword%")->orWhere('meta_keyword_en','LIKE',"%$searchKeyword%")->orWhere('meta_desc_ar','LIKE',"%$searchKeyword%");
                });
            }
    
            $perPage = 9; 
            $cars = $query->paginate($perPage);
            $data=CarResource::collection( $cars );
    
            return $this->successWithPagination(message:"All Pagination Car",data: $data);
        } else {
        
        try{
            
            $tab = request('tags');
            $type = request('is_new',[]);
            $gear_shifters = request('gear_shifters', []);
            $fuel_types = request('fuel_types', []);
            $car_bodies = request('car_bodies', []);
            $years = request('years', []); 
            $model_ids = request('model_ids', []);
            $minPrice = request('min_price');
            $maxPrice = request('max_price');
            $color_ids = request('color_ids', []);
            $orderDirection= request('sort');
            $fuel_tank_capacities = request('fuel_tank_capacities', []);
            $brand_ids = request('brand_ids', []);
            
            $query = Car::query()->where('publish', 1);
            
             //best Selling car
             $query->when(!empty($tab), function ($q, $tab) {
                $tag = Tag::with('cars')->find($tab);
              
                if ($tag) {
                    $carIds = $tag->cars->pluck('id')->toArray();
                    return $q->whereIn('id', $carIds);
                }
                
                 });

            $query->when(!empty($type), function ($q) use ($type) { 
                if (in_array('all', $type)) {
                    return $q;
                } else {
                    return $q->whereIn('is_new', $type);
                }    
               
            });
    

            //gearshifter
            $query->when(!empty($gear_shifters), function ($q) use ($gear_shifters) {
                if (in_array('all', $gear_shifters)) {
                    return $q;
                } else {
                    return $q->whereIn('gear_shifter', $gear_shifters);
                }   
            });

            //fuel_type
            $query->when(!empty($fuel_types), function ($q) use ($fuel_types) {

                if (in_array('all', $fuel_types)) {
                    return $q;
                } else {
                    return $q->whereIn('fuel_type', $fuel_types);
                }   

            });

            
                    // Car bodies with multiple values
            $query->when(!empty($car_bodies), function ($q) use ($car_bodies) {
                if (in_array('all', $car_bodies)) {
                    return $q;
                } else {
                    return $q->whereIn('car_body', $car_bodies);
                }    
                });

                // Color IDs with multiple values
                $query->when(!empty($color_ids), function ($q) use ($color_ids) {
                    if (in_array('all', $color_ids)) {
                        return $q->whereHas('colors',function($qc) {
                            return $qc->get();
                        });
                    }
                    else{
    
                        return $q->whereHas('colors',function($qc) use($color_ids){
                           return $qc->whereIn('color_id',$color_ids);
                        });
                    }
                });
        
               
                // Years with multiple values
                $query->when(!empty($years), function ($q) use ($years) {
                    if (in_array('all', $years)) {
                        return $q;
                    }
                
                    if (in_array(1, $years)) {
                        return $q->where(function ($query) use ($years) {
                            $query->where('year', '<', 2010)
                                  ->orWhereIn('year', $years);
                        });
                    }
                    
                    return $q->whereIn('year', $years);
                    
                });

              
        
                // Model IDs with multiple values
            $query->when(!empty($model_ids), function ($q) use ($model_ids) {
                if (in_array('all', $model_ids)) {
                    return $q;
                } else {
                    return $q->whereIn('model_id', $model_ids);
                }  
                });
                //brand_id
            $query->when(!empty($brand_ids), function ($q) use ($brand_ids) {
                if (in_array('all', $brand_ids)) {
                    return $q;
                } else {
                  
                    return $q->whereIn('brand_id', $brand_ids);
                } 
            });

            // Price Range
            $query->when(isset($minPrice), function ($q) use ($minPrice) {
                return $q->where('price', '>=', $minPrice);
            })->when(isset($maxPrice), function ($q) use ($maxPrice) {
                return $q->where('price', '<=', $maxPrice);
            });

            $query->when('engine_capacity', function ($q) use ($fuel_tank_capacities) {
                if (in_array('all', $fuel_tank_capacities)) {
                    return $q;
                } else {
                    foreach ($fuel_tank_capacities as $choice) {
                        switch ($choice) {
                            case 0:
                                $q->orWhereBetween('engine_capacity', [800, 1200]);
                                break;
                            case 1:
                                $q->orWhereBetween('engine_capacity', [1300, 1400]);
                                break;
                            case 2:
                                $q->orWhereBetween('engine_capacity', [1500, 1600]);
                                break;
                            case 3:
                                $q->orWhereBetween('engine_capacity', [1800, 2000]);
                                break;
                            case 4:
                                $q->orWhereBetween('engine_capacity', [2200, 3000]);
                                break;
                            case 5:
                                 $q->where('engine_capacity', '>', 3000);
                                 break;
                            default:
                                 $q->WhereBetween('engine_capacity', [0, 3000]);
                                break;
    
    
                            // $query->orWhereBetween('fuel_tank_capacity', [0, 3000]);
                        }
                    }
                } 
                
            });
            // $query->orderBy('created_at', 'desc');
         
            $query->orderBy('created_at', $orderDirection?$orderDirection:"desc");


            $perPage = 9; 
            $que = $query->paginate($perPage);
            $data=CarResource::collection( $que );

            return $this->successWithPagination(message:"Cars per page",data: $data);

            }
        catch (\Exception $e){
                return $this->failure(message: $e->getMessage());
            }

        }

    }

    public function carFilter()
    {
       
        if (request()->has('search')) {
            $searchKeyword = request()->input('search');
            $query = Car::query();
    
           $query->where(function ($query) use ($searchKeyword) {
               $query->where('name_ar', 'LIKE', "%$searchKeyword%")
               ->orWhere('name_en', 'LIKE', "%$searchKeyword%")->orWhere('description_ar','LIKE', "%$searchKeyword%")->orWhere('description_en', "%$searchKeyword%");
           });
   
           if ($searchKeyword) {
               $query->with('brand')->orWhereHas('brand', function ($brandQuery) use ($searchKeyword) {
                   $brandQuery->where('name_ar', 'LIKE', "%$searchKeyword%")->orWhere('name_en','LIKE',"%$searchKeyword%")->orWhere('meta_desc_en','LIKE', "%$searchKeyword%")->orWhere('meta_keyword_ar', "%$searchKeyword%")->orWhere('meta_keyword_ar', "%$searchKeyword%");
               });
           }
       
           if ($searchKeyword) {
               $query->with('model')->orWhereHas('model', function ($modelQuery) use ($searchKeyword) {
                   $modelQuery->where('name_ar', 'LIKE', "%$searchKeyword%")->orWhere('name_en','LIKE',"%$searchKeyword%")->orWhere('meta_keyword_ar','LIKE',"%$searchKeyword%")->orWhere('meta_keyword_en','LIKE',"%$searchKeyword%")->orWhere('meta_desc_ar','LIKE',"%$searchKeyword%");
               });
           }
   
           $perPage = 9; 
           $cars = $query->paginate($perPage);
           $data=CarResource::collection( $cars );
   
           return $this->successWithPagination(message:"All Pagination Car",data: $data);
       } else {
        try {
        // Convert comma-separated strings to arrays and handle defaults
        $type = $this->getArrayFromRequest(request('is_new'));
        $gear_shifters = $this->getArrayFromRequest(request('gear_shifters'));
        $fuel_types = $this->getArrayFromRequest(request('fuel_types'));
        $car_bodies = $this->getArrayFromRequest(request('car_bodies'));
        $years = $this->getArrayFromRequest(request('years'));
        $model_ids = $this->getArrayFromRequest(request('model_ids'));
        $color_ids = $this->getArrayFromRequest(request('color_ids'));
        $fuel_tank_capacities = $this->getArrayFromRequest(request('fuel_tank_capacities'));
        $brand_ids = $this->getArrayFromRequest(request('brand_ids'));
        $taxFactor = (settings()->getSettings('tax') / 100 + 1);
        $minPrice = request('min_price');
        $maxPrice = request('max_price');
        // ['maxPrice'=>$defaultMaxPrice,'minPrice'=>$defaultMinPrice] = $this->getMaxMinPrices();
        $orderDirection = request('sort', 'desc'); 
        $query = Car::query()->where('publish', 1);
        if(!empty($type)){    
            $query->when(!empty($type), fn($q) => $this->filterInArray($q, 'is_new', $type));
        }
        if(!empty($gear_shifters)){ 
            $query->when(!empty($gear_shifters), fn($q) => $this->filterInArray($q, 'gear_shifter', $gear_shifters));

        }
        if(!empty($fuel_types)){ 
            $query->when(!empty($fuel_types), fn($q) => $this->filterInArray($q, 'fuel_type', $fuel_types));
        }

        if(!empty($car_bodies)){ 
            $query->when(!empty($car_bodies), fn($q) => $this->filterInArray($q, 'car_body', $car_bodies));
        }
        if(!empty($color_ids)){ 
            $query->when(!empty($color_ids), function ($q) use ($color_ids) {
                return $q->whereHas('colors', function ($qc) use ($color_ids) {
                    $qc->WhereIn('color_id', $color_ids);
                });
            });
        }
        if(!empty($years)){ 
            
            $query->when(!empty($years), fn($q)=> $this->filterInArray($q,'year',$years));
        }
        
        if(!empty($model_ids)){ 
            
            $query->when(!empty($model_ids), fn($q) => $this->filterInArray($q, 'model_id', $model_ids));
        }
        if(!empty($brand_ids)){ 
            $query->when(!empty($brand_ids), fn($q) => $this->filterInArray($q, 'brand_id', $brand_ids));
        }
        if(settings()->getSettings('maintenance_mode') == 1){

            if(isset($minPrice) && isset($maxPrice)){ 
                // if($defaultMinPrice!=$minPrice)
                    $query->when(isset($minPrice), function($q) use($minPrice,$maxPrice,$taxFactor){
                        $adjustedMinPrice = $minPrice - 0.01;
                        $adjustedMaxPrice = $maxPrice + 0.01;
                        $q->WhereRaw('coalesce(discount_price,price) * ?  BETWEEN ? AND ?', [$taxFactor,$adjustedMinPrice,$adjustedMaxPrice]);
                    } );  
                    // dd($minPrice,$maxPrice,$taxFactor);
                    //  dd($query->toSql(),$query->getBindings());
                
            }
        }else
        {
            
            if(isset($minPrice) && isset($maxPrice)){ 
                // if($defaultMinPrice!=$minPrice)
                    $query->when(isset($minPrice), function($q) use($minPrice,$maxPrice){
                    $q->WhereRaw('coalesce(discount_price,price) BETWEEN ? AND ?', [$minPrice,$maxPrice]);
                    } );  
                    // dd($query->toSql(),$query->getBindings());
                
            }
        }
        if(!empty($fuel_tank_capacities)){ 
            $query->when(!empty($fuel_tank_capacities),fn($q)=>$this->filterInArray($q,'engine_capacity',$fuel_tank_capacities));
        }
        
        $query->orderBy('price_field_status','asc')->orderBy('created_at', $orderDirection);

        // $perPage = 9;
        // $cars = $query->paginate($perPage);
        $cars= $query->get();
        $data = CarResource::collection($cars);

        // return $this->successWithPagination(message: "Cars per page", data: $data);
        return $this->success(data:$data);
    } catch (\Exception $e) {
            return $this->failure(message: $e->getMessage());
        }

       }
    }
    private function getArrayFromRequest($param): array
    {
        return is_array($param) ? $param : (isset($param) ? explode(',', $param) : []);
    }
    private function filterInArray($query, $column, $values)
    {   
        
        if(!is_array($values)) return $query->Where($column,$values);
        elseif (in_array('all', $values)) return $query; // Skip filtering if 'all' is present
        else return $query->WhereIn($column, $values);
    }
 


    public function getMaxMinPrices(){
       $prices = Car::selectRaw('
            MAX(CASE WHEN discount_price IS NOT NULL THEN discount_price ELSE price END) as max_price,
            MIN(CASE WHEN discount_price IS NOT NULL THEN discount_price ELSE price END) as min_price
        ')->first();
        $maxPrice = $prices->max_price;
        $minPrice = $prices->min_price;
        
        return [
            'minPrice'=>$minPrice,
            'maxPrice'=>$maxPrice,
        ];

    }

    public function searchCar(Request $request){
        $model_id = $request->input('model_id');
        $car_id = $request->input('car_id');
        $brand_id = $request->input('brand_id');
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');
    
        $query = Car::query();
    
        if ($model_id) {
            $query->where('model_id', $model_id);
        }
    
        if ($brand_id) {
            $query->where('brand_id', $brand_id);
        }
    
        if ($car_id) {
            $query->where('id', $car_id);
        }
    
        // if ($min_price) {
        //     $query->where('price', '<=', $min_price);
        // }
    
        if ($max_price && $min_price) {
            $query->whereBetween('price',[$min_price,$max_price]);
        }
 
        $results = $query->get();
        
        return response()->json($results);
    }
    public function advancedSelect($id,$step){
        $result=[];
        $lowest_price=0;
        $highest_price=0;
        switch($step)
        {
            case 0:
                $result=CarModel::where('brand_id',$id)->get()->map(function($item){
                    return [
                        'model_id'=>$item->id,
                        'model_name'=>$item->name
                    ];
                });
                break;
            case 1:
                $cars=Car::with('colors')->where('model_id',$id)->get();
                $lowest_price=$cars->min('price');
                $highest_price=$cars->max('price');
                // Collect all unique colors separately
                $available_colors = $cars->flatMap(function ($car) {
                    return $car->colors; 
                })->unique('id') 
                ->map(function ($color) {
                    return [
                        'color_id' => $color->id,
                        'color_name' => $color->name,
                    ];
                })->values(); 
                $manufacturing_years=  $cars->pluck('year')->unique()->values();
                $tank_capacities = $cars->pluck('engine_capacity')->unique()->values();
                $result=['available_colors'=> $available_colors
                ,'manufacturing_years'=>$manufacturing_years
                ,'tank_capacities'=>$tank_capacities
                ,'lowest_price'=>$lowest_price
                ,'highest_price'=>$highest_price,];
            break;
        }
        if(empty($result))
        {
            return $this->failure("No data found");
        }
        else if($lowest_price>0 && $highest_price>0)
        {
            return $this->success(data:$result);
        }
        else
        {

            return $this->success(data:['models'=>$result]);
        }
    }
    public function getColorImages(Car $car,Color $color=null)
    {


        // DB::enableQueryLog();
        $colorSelected = CarColorImage::where('car_id',$car->id)->first()->color_id;
        //  dd($colorSelected);
        // $query = DB::getQueryLog();
        // dd($query);

        $carColors=[];
        if(!$color){
             $carColors = $car->colors()->where('color_id', $colorSelected )->orderBy('sort')->get();    
        }
        else
        {
            $carColors = $car->colors()->where('color_id',$color->id)->orderBy('sort')->get();
        }
      
        if($carColors->isEmpty())
        {
            return $this->failure('No images associated with this color for the car.');
        }
       
        return $this->success(data:$carColors->pluck('pivot.full_image_path'));
        
        
    }
    public function filterGetApi()
    {   
        $brands                 = Brand::all();
        $models                 = CarModel::all();
        $colors                 = Color::all();
        $car                    = Car::query()->where('publish',1);
        $taxFactor = (settings()->getSettings('tax') / 100 + 1);
        if(settings()->getSettings('maintenance_mode') == 1){
            $max_price =  $car->clone()->selectRaw('MAX(CASE WHEN discount_price IS NOT NULL THEN discount_price ELSE price END) * ? as max_price',[$taxFactor])
            ->value('max_price');
            // $min_price              = $car->min('price');
            $min_price = $car->clone()->selectRaw('MIN(CASE WHEN discount_price IS NOT NULL THEN discount_price ELSE price END) * ? as min_price',[$taxFactor])
            ->value('min_price');
        
        }else 
        {

            // $max_price              = $car->max('price');
            $max_price =  $car->clone()->selectRaw('MAX(CASE WHEN discount_price IS NOT NULL THEN discount_price ELSE price END) as max_price')
            ->value('max_price');
            // $min_price              = $car->min('price');
            $min_price = $car->clone()->selectRaw('MIN(CASE WHEN discount_price IS NOT NULL THEN discount_price ELSE price END) as min_price')
            ->value('min_price');
        }
 
        $years                  = $car->pluck('year')->unique()->sortDesc()->values()->toArray();
       
        $fuelTankCapacities     = $car->pluck('engine_capacity')->unique()->sortDesc()->values()->toArray();                            
        $result = [
            'brand_ids'=>$brands->map(function($brand){
                return [
                    'id'=>$brand->id,
                    'name'=>$brand->name
                ];
            }),
            'model_ids'=>$models->map(function($model){
                return [
                    'id'=>$model->id,
                    'name'=>$model->name
                ];
            }),
            'color_ids'=>$colors->map(function($color){
                return [
                    'id'=>$color->id,
                    'name'=>$color->name
                ];
            }),
            'max_price'=>$max_price,
            'min_price'=>$min_price,
            'fuel_tank_capacities'=>$fuelTankCapacities,
            'years'=>$years,
            'car_bodies'=>collect(['hatchback','sedan','four-wheel-drive','commercial','family'])->map(function($type){
                return [
                    'type'=>$type,
                    'name'=>__($type)
                ];
            })->toArray(),
            'is_new'=>collect(['used','new'])->map(function($type,$index){
                return [
                    'type'=>$index,
                    'name'=>__(($type))
                ];
            })->toArray(),
            'gear_shifters'=>collect(['manual','automatic'])->map(function($type){
                return [
                    'type'=>$type,
                    'name'=>__(($type))
                ];
            })->toArray(),
            'fuel_types'=>collect(['gasoline','diesel','electric','hybrid'])
            ->map(function($type){
                return [
                    'type'=>$type,
                    'name'=>__(($type))
                ];
            })->toArray(),
            
        ];

        return $this->success(data:$result);


        
    }
    public function advancedSelect2($id){
        
        $carsQyery=Car::query()->with('colors')->where('model_id',$id);        
        $lowest_price=$carsQyery->clone()->selectRaw('MIN(case when discount_price IS NOT NULL then discount_price ELSE price end) as max_price')->value('max_price');
        $highest_price=$carsQyery->clone()->selectRaw('MAX(case when discount_price IS NOT NULL then discount_price ELSE price end) as min_price')->value('min_price');
        $cars=$carsQyery->get();
        // Collect all unique colors separately
        $available_colors = $cars->flatMap(function ($car) {
            return $car->colors; 
        })->unique('id') 
        ->map(function ($color) {
            return [
                'color_id' => $color->id,
                'color_name' => $color->name,
            ];
        })->values(); 
        $manufacturing_years=  $cars->pluck('year')->unique()->values();
        $tank_capacities = $cars->pluck('engine_capacity')->unique()->values();
        $result=collect(['available_colors'=> $available_colors
        ,'manufacturing_years'=>$manufacturing_years
        ,'tank_capacities'=>$tank_capacities
        ,'lowest_price'=>$lowest_price
        ,'highest_price'=>$highest_price,]);
        // Filter out all non-meaningful values
        $filteredResult = $result->filter(function ($value) {
            if ($value instanceof \Illuminate\Support\Collection) {
                return !$value->isEmpty(); // Keep non-empty collections
            }
            return !is_null($value); // Keep non-null scalar values
        });
        if($filteredResult->isEmpty())
        {
            return $this->success(message:"No data found",data:null);
        }
        return $this->success(data:$result);
    

    }
}
