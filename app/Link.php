<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['name', 'title', 'url'];
}
