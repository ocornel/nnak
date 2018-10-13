<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['on_gallery', 'image_url', 'caption', 'description', 'event_id'];

    public function getEvent() {
        return Event::find($this->event_id);
    }

    public function getPageUrl() {
        return $this->getEventPage()->url;
    }

    public function getEventPage() {
        return $this->getEvent()->getPage();
    }
}
