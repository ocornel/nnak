<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'image_url', 'profession', 'role', 'profile'];
}
