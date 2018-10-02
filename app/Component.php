<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['name', 'title', 'content', 'icon'];
}
