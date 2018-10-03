<?php

namespace NNAK;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'content', 'url'];

    public function getCreator() {
        return User::find($this->created_by);
    }

    public static function info($str = "") {
        try {
            return WebInfo::where('name','LIKE',"%{$str}%")->first()->content;
        } catch (\Exception $exception) {
            return null;
        }
    }

    public static function component($str = "") {
        try {
            return Component::where('name','LIKE',"%{$str}%")->first()->content;
        } catch (\Exception $exception) {
            return null;
        }
    }
}
