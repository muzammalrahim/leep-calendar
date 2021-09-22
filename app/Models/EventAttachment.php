<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAttachment extends Model
{
    use HasFactory;


    public function storeEventAttachments($event_id, $data)
    {
        $this->event_id        = $event_id;
        $this->video1          = $data['video1'];
        $this->video2          = $data['video2'];
        $this->video3          = $data['video3'];
        $this->download_title1 = $data['download_title1'];
        $this->download_title2 = $data['download_title2'];
        $this->download_title3 = $data['download_title3'];
        $this->download_title3 = $data['download_title3'];
        //$this->extra_image1    = $data['extra_image1'];
        //$this->extra_image2    = $data['extra_image2'];
        //$this->extra_image3    = $data['extra_image3'];
        $this->image_tile2     = $data['image_tile2'];
        $this->image_tile3     = $data['image_tile3'];
        $this->socail_link1    = $data['socail_link1'];
        $this->socail_link2    = $data['socail_link2'];
        $this->socail_link3    = $data['socail_link3'];

        $this->save();

        return with($this);
    }

    public function updateEventAttachments($event_id, $data)
    {
        $this->event_id        = $event_id;
        $this->video1          = $data['video1'];
        $this->video2          = $data['video2'];
        $this->video3          = $data['video3'];
        $this->download_title1 = $data['download_title1'];
        $this->download_title2 = $data['download_title2'];
        $this->download_title3 = $data['download_title3'];
        $this->download_title3 = $data['download_title3'];
        //$this->extra_image1    = $data['extra_image1'];
        //$this->extra_image2    = $data['extra_image2'];
        //$this->extra_image3    = $data['extra_image3'];
        $this->image_tile2     = $data['image_tile2'];
        $this->image_tile3     = $data['image_tile3'];
        $this->socail_link1    = $data['socail_link1'];
        $this->socail_link2    = $data['socail_link2'];
        $this->socail_link3    = $data['socail_link3'];

        $this->update();

        return with($this);
    }
}
