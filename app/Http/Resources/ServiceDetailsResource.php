<?php

namespace App\Http\Resources;

use App\Enums\FeatureOrPossibility;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $services = Service::where('id','!=',$this->id)->get();

        $features= collect($this->features)->filter(function($feature){
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
      
  
        
        return [  
        'id'=>$this->id,
        'name'=>$this->name,
        'price_before_discount'=>$this->price,
        'price'=>$this->discount_price,
        'price_after_tax' => $this->getPriceAfterVatAttribute() == $this->price ? 0:$this->getPriceAfterVatAttribute(),
        'image'=>getImagePathFromDirectory($this->image,'Services'),
        'description'=>$this->description,
        'features'=>$features,
        "related_service"=>ServiceResource::collection($services)

     
        ];
    }
}
