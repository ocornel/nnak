<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['title', 'tagline', 'content', 'image_url', 'page_id'];

    public function getPageUrl() {
        return Page::find($this->page_id)->url;
    }
}
