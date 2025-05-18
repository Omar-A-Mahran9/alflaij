<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         
        // Get the iframe tag from the 'iframe' column in the branches table
        $iframeTag = $this->frame; // Assuming 'iframe' is the column name in the branches table

        // Initialize src with null
        $iframeSrc = null;

        // Use preg_match to extract the src attribute value
        if (preg_match('/<iframe[^>]+src=["\']?([^"\'>]+)["\']?/i', $iframeTag, $matches)) {
            $iframeSrc = $matches[1] ?? null; // Assign the extracted src or null if not found
        }
        return [
            'id'=>$this->id,
            'phone'=>$this->phone,

            'name'=>$this->name,
            'city'=>$this->address,
            'whatsapp'=>$this->whatsapp,
            'frame'=> $iframeSrc,
               'facebook' => settings()->getSettings('facebook_url'),
                  'twitter' => settings()->getSettings('twitter_url'),
                'instagram' => settings()->getSettings('instagram_url'),
                'youtube' => settings()->getSettings('youtube_url'),
                'snapchat' => settings()->getSettings('snapchat_url'),
                                'email' => settings()->getSettings('email'),


        ];
    }
}
