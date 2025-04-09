<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory,SoftDeletes;

    protected $appends = ['title', 'work_type','short_description', 'long_description'];
    protected $fillable = [
        'title_ar',
        'title_en',
        'short_description_ar',
        'short_description_en',
        'long_description_ar',
        'long_description_en',
        'address',
        'status',
        'address',
        'work_type',
        'city_id',
    ];
 
    // protected $guarded = [];
    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d'
    ];

    public function getTitleAttribute()
    {
        return $this->attributes['title_' . getLocale()];
    }
    
    public function getShortDescriptionAttribute()
    {
        return $this->attributes['short_description_' . getLocale()];
    }
    
    public function getLongDescriptionAttribute()
    {
        return $this->attributes['long_description_' . getLocale()];
    }

    public function getWorkTypeAttribute()
    {
        $workTypeKey = $this->attributes['work_type'] ?? null;
        if ($workTypeKey == 'full-time')
        {
            if (getLocale() == 'en')
            {
                return 'full-time';
            } else
            {
                return 'full-time';
            }
        } else if ($workTypeKey == 'part-time')
        {
            if (getLocale() == 'en')
            {
                return 'part-time';
            } else
            {
                return 'part-time';
            }
        } else
        {
            if (getLocale() == 'en')
            {
                return 'remote';
            } else
            {
                return 'remote';
            }

        }
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
