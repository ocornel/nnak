<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['title', 'message', 'client_name', 'location', 'rating'];
}
