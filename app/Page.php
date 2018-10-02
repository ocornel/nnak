<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'content', 'url'];

    public function getCreator() {
        return User::find($this->created_by);
    }
}
