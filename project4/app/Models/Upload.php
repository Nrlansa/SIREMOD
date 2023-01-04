<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// use Illuminate\Support\Str;

class Upload extends Model
{
    protected $table = 'upload';

    protected $fillable = ['tentang', 'no_regulasi', 'kategori', 'file'];

    function Perubahan()
    {
        return $this->hasOne(Perubahan::class, 'id');
    }
}