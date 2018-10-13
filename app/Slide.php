<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['title', 'tagline', 'content', 'image_url', 'page_id'];

    public function getPageUrl() {
        return $this->getPage()->url.'/p'.$this->page_id;
    }

    public function getPage() {
        return Page::find($this->page_id);
    }
}
