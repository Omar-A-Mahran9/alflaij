<?php

namespace App\Models;

use App\Enums\CarStatus;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Models\Possibility;
use App\Models\Feature;
class Car extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'cars';
    protected $guarded            = [];
    protected $appends            = ['name','selling_price', 'price_after_vat'];
    protected $casts              = ['created_at' => 'date:Y-m-d', 'updated_at' => 'date:Y-m-d'];

    static array $carCardColumns  = [ 'id', 'name_ar' , 'name_en' , 'is_new', 'year',
                                      'have_discount', 'discount_price', 'price', 'kilometers','fuel_type','main_image','viewers'];
     protected static function booted()
    {
        // if(request()->segment(1) != 'dashboard' )
        // {
        //     static::addGlobalScope('availableCars', function(Builder $builder){
        //         $builder->where('status', CarStatus::approved->value);
        //     });
        // }

    }


    public function features()
    {
        return $this->belongsToMany(Feature::class, 'car_feature', 'car_id', 'feature_id')->withPivot('description_ar', 'description_en');
    }





   
    public function images()
    {
    return $this->hasMany(CarImage::class, 'car_id');
    }

    public function getNameAttribute()
    {
        return $this->attributes['name_' . getLocale()]??null;
    }

    public function priceOtherText($lang)
    {
        return $this->attributes['price_field_status'] == 'other' ? json_decode($this->attributes['price_field_value'], true)['text_' . $lang] : '';
    }

    public function getPriceFieldValueAttribute()
    {
        if ( $this->attributes['price_field_status'] === 'other')
            return json_decode( $this->attributes['price_field_value'] , true)['text_' . getLocale()];
        else
            return $this->attributes['price_field_value'];
    }
  public function getPriceAfterVatAttribute()
    {
 
        $price = ($this->discount_price !== null && $this->discount_price > 0) ? $this->discount_price : $this->price;

        if (settings()->getSettings('maintenance_mode') == 1) {
            return $price * (1 + settings()->getSettings('tax') / 100 );
        } else {
            $price=0;
            return $price;
        }
            
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,'car_color_images')->using(CarColorImage::class)->withPivot('image')
        ->withTimestamps();
    }
    
    
    //  public function color_id()
    // {
    //     return $this->belongsTo(Color::class);
    // }
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }

    public function brand()
    {
        return $this->belongsTo( Brand::class );
    }

    public function model()
    {
        return $this->belongsTo( CarModel::class );
    }
    public function category()
    {
        return $this->belongsTo( Category::class );
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class,'car_offer','car_id','offer_id');
    }

    public function hasOffers()
    {
        return $this->offers->count() > 0;
    }

    public function getSellingPriceAttribute()
    {
        $haveDiscount = $this->attributes['have_discount'] ?? false;
        $discountPrice = $this->attributes['discount_price'] ?? 0;
        $price = $this->attributes['price'] ?? 0;

        return $haveDiscount && $discountPrice ? $discountPrice : $price;
    }
  
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function getPriceAttribute()
    {
        return $this->attributes['price'] ?? 0;
    }


}
