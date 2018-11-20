<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['tooltip', 'label', 'document_url'];
}
