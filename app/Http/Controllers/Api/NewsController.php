<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\App;

use App\Models\Faq;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsListResource;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    public function show($id)
    {
        try
        {
            $news                      = News::find($id);
            if(!$news)
            {
                return $this->failure(__("no data found"));
            }
    
            return $this->success(data:new NewsResource($news));
        } catch (\Exception $e)
        {
            return $this->failure(message: $e->getMessage());
        }
    }


    public function index(){
        $news = News::all();
        if($news->isEmpty())
        {
            return $this->success(__("no data found"),[]);   
        }
        return $this->success(data:NewsListResource::collection($news));
    }

}
