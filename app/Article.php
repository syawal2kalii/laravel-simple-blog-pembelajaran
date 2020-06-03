<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id']; // blacklist field / memproteksi field tertentu

//    protected $fillable = ['role_id']; // whitelist field / membolehkan field tertentu
}
