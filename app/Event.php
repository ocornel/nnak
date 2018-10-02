<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['date', 'intro', 'page_id'];

    public function getPage() {
        return Page::find($this->page_id);
    }

    public function getViews() {
        return $this->getPage()->views;
    }

    public function getImages() {
        return Image::where('event_id', $this->id)->get();
    }
}
