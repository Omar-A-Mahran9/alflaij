<?php

namespace App\Http\Resources;

use App\Enums\PriceFieldStatus;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $tax = settings()->getSettings('tax');

        $price_field_status = PriceFieldStatus::values()[$this->price_field_status]??'available_upon_request';
        $show_status = $price_field_status === PriceFieldStatus::show_details->name ? 0 : 1;
        return[
        'id' => $this->id,
        "brand"=> $this->brand->name,
        "model"=>$this->model->name,
        'name'=> $this->brand->name.' - '.$this->model->name.' - '. $this->category->name,
        // "price"=> $this->price,
        'show_status'=>$show_status,
        'price_field_status'=>__($price_field_status) === __('others') ? $this->other_description:__($price_field_status),

            'price'=>$price_field_status === PriceFieldStatus::show_details->name &&$this->have_discount?(number_format($this->discount_price,0)):number_format($this->price,0),
            'price_before_discount'=>$price_field_status === PriceFieldStatus::show_details->name && $this->have_discount?number_format($this->price,0) :0,



                      'price_after_vat' => $price_field_status === PriceFieldStatus::show_details->name
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






        // "price_after_vat"=>$this->price_after_vat ==$this->price ? 0 :$this->price_after_vat ,
        "fuel_type"=>__($this->fuel_type),
        "gear_shifter"=>__($this->gear_shifter),
        "year"=>$this->year,
        'have_discount'=>$this->have_discount,
        'discount_percentage' => $this->discount_price != 0 ? number_format((($this->price - $this->discount_price) / $this->price) * 100, 2): 0,
        // 'brand'=>$this->brand->name
        'image'=>getImagePathFromDirectory($this->main_image,'Cars')
        ];

    }
}
