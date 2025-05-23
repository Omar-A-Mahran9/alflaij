<?php

namespace App\Http\Resources;

use app\Enums\CarBodyType;
use App\Enums\CarStatus;
use App\Enums\FeatureOrPossibility;
use App\Enums\PriceFieldStatus;
use App\Models\Car;
use App\Models\CarColorImage;
use App\Models\CarOrder;
use App\Models\Favorite;
use App\Models\Order;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;
use \App\Http\Resources\carCardDetails;
class CarResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $cars = Car::where('id','!=' ,$this->id)
        ->where('brand_id',$this->brand_id)
        ->get();
        $price_field_status = PriceFieldStatus::values()[$this->price_field_status]??'available_upon_request';
        $show_status = $price_field_status === PriceFieldStatus::show_details->name ? 0 : 1;
        $features= $this->features->filter(function($feature){
            return $feature->type === FeatureOrPossibility::feature->value;
        })
        ->map(function ($feature) {
            return [
                'id' => $feature->id,
                'title'=> $feature->title,
                'description' => $feature->description,
                'icon' => getImagePathFromDirectory($feature->icon,'Icons'),


            ];
        })->toArray();
        $possibilities = $this->features->filter(function($feature){
            return $feature->type === FeatureOrPossibility::posibility->value;
        })
        ->map(function ($feature) {
            return [
                'id' => $feature->id,
                'title'=> $feature->title,
                'description' => $feature->description,
                'icon' => getImagePathFromDirectory($feature->icon,'Icons'),


            ];
        })->toArray();
       // Group colors by color_id with details
        $groupedColors = $this->colors->mapToGroups(function ($color) {
            return [
                $color->id => [
                    'color_id' => $color->id,
                    'name' => $color->name,
                    'hexa' => $color->hex_code,
                    'image' => getImagePathFromDirectory($color->pivot->image, 'Cars'),
                ],
            ];
        });

        // First Array: Color details (color_id, name, hexa)
        $colorDetails = $groupedColors->map(function ($group, $colorId) {
            return [
                'color_id' => $colorId,
                'name' => $group->first()['name'],
                'hexa' => $group->first()['hexa'],
            ];
        })->values()->toArray();



        // $financeOrdersCountPerCar = Order::where('car_id', $this->id)->whereHas('orderDetailsCar', function ($query) {
        //     $query->where('payment_type', 'finance');
        // })->with('orderDetailsCar')->count();
        // $orderCount=$order->count();

             $tax = settings()->getSettings('tax');

        return [
            'id' => $this->id,
            'title' => Str::limit($this->name, 35),
'main_title' => collect([
    $this->brand?->name,
    $this->model?->name,
    $this->category?->name,
])->filter()->implode(' '),
            'description'=> getLocale() == 'ar' ? $this->description_ar : $this->description_en ,
            'publish_date'=>$this->created_at->format('Y-m-d ') ?? '',
            'statue'=>$this->is_new == 1?__('New')  :__('Used') ,
            'statuekey'=>$this->is_new,
            'kilometer'=>$this->kilometers,
            'main_image'=>getImagePathFromDirectory($this->main_image,'Cars'),
            'fuel_type'=>__($this->fuel_type),
            'fuel_typekey'=>$this->fuel_type,
            'gear_shifter'=>__($this->gear_shifter),
            'gear_shifterkey'=>$this->gear_shifter,
            'year'=>$this->year,
            'show_status'=>$show_status,
            'price_field_status'=>__($price_field_status) === __('others') ? $this->other_description:__($price_field_status),
            //'price'=> $price_field_status === PriceFieldStatus::show_details->name ?$this->price:0,
            'supplier'=>__($this->supplier),
            'supplier_english'=>$this->supplier,
            'have_discount'=>$this->have_discount,
            'video_url'=>$this->video_url,
            'price'=>$price_field_status === PriceFieldStatus::show_details->name &&$this->have_discount?number_format($this->discount_price,0):number_format($this->price,0),


            'cylinders'=>$this->cylinders,
            'Fuel_consumption'=>$this->Fuel_consumption,
            'price_before_discount'=>$price_field_status === PriceFieldStatus::show_details->name && $this->have_discount?number_format($this->price ,0):0,


//if maintenance_mode = 0 return null if not return result as int
               'price_after_tax' => $price_field_status === PriceFieldStatus::show_details->name
    ? (settings()->getSettings('maintenance_mode') == 1
        ? number_format(
            ($this->have_discount == 1
                ? (int) $this->discount_price
                : ((int) $this->price * (1 + $tax / 100))
            ),
            0 // No decimals
        )
        : null // Force NULL if maintenance_mode == 0
    )
    : null,

    // round(
    //     ($this->have_discount == 1 ? $this->discount_price : $this->price)
    //     * (1 + $tax / 100)
    //   )





            //'selling_price'=>$price_field_status === PriceFieldStatus::show_details->name ?$this->getSellingPriceAttribute():0,
            'tax'=>settings()->getSettings('maintenance_mode') == 1 ? settings()->getSettings('tax') : 0,
            'show_in_home_page' => (bool) $this->show_in_home_page,
            'car_body'=>__($this->car_body),
            'fuel_tank_capacity'=>$this->engine_capacity,
            'brand' => [
                'id' => $this->brand->id??"",
                'title'=>$this->brand->name??"",
                "image"=> getImagePathFromDirectory($this->brand->image,'Brands')??"",
                "cover"=> $this->brand->cover??"",
                'car_available_types'=>$this->brand->car_available_types??""
            ],
            'model' => [
                'id' => $this->model->id??"",
                'title'=>$this->model->name??"",
            ],
            'categories' => [
                'id' => $this->category->id??"",
                'title'=>$this->category->name??"",
            ]  ,
            'city' => [
                'id' => $this->city->id??' ',
                'title'=>$this->city->name??' ',
            ],
            'features' =>!empty($features) ? $features : [],
            'possibilities'=>!empty($possibilities) ? $possibilities :[],
            'colors' => !empty($colorDetails) ? $colorDetails   :[],
            'related_car'=> carCardDetails::collection($cars)
        ];
    }
}
