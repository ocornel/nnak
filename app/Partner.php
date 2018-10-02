<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name', 'icon_url', 'url'];
}
