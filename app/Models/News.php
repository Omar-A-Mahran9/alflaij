<?php

namespace App\Models;
use Illuminate\Support\Facades\App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $appends = ['title','description','full_image_path'];
    protected $casts   = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d'
    ];

    // public function getTagsAttribute()
    // {
    //     return explode(',', $this->attributes['tags']);
    // }
    public function getTitleAttribute()
    {
        return $this->attributes['title_' . getLocale() ];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['description_' . getLocale() ];
    }
 
    
    public function getFullImagePathAttribute()
    {
        return getImagePathFromDirectory($this->attributes['main_image'],'News');

    }
   
    



}
