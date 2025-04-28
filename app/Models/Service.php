<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];
    protected $appends = ['name', 'price_after_vat'];
    protected $casts   = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d'
    ];


    public function getNameAttribute()
    {
        return $this->attributes['name_' . getLocale() ];
    }

    // public function getTitleAttribute()
    // {
    //     return $this->attributes['title_' . getLocale() ];
    // }

    public function getPriceAfterVatAttribute()
    {
        $tax = settings()->getSettings('tax');
        $maintenance_mode = settings()->getSettings('maintenance_mode');
    
        $price = ($this->discount_price !== null && $this->discount_price > 0) 
            ? $this->discount_price 
            : $this->price;
    
        if ($maintenance_mode == 1) {
            return round($price * (1 + $tax / 100));
        }
    
        return $price; // or return null if you want no value when maintenance_mode == 0
    }
    
 
   
    
   
    public function requestservice(){
        return $this->hasMany(RequestService::class);
    }
    
}
