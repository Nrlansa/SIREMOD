<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perubahan extends Model
{
    protected $table = 'perubahan';

    protected $fillable = ['tentang2', 'no_regulasi2', 'kategori2', 'file_perubahan'];

    function Upload()
    {
        return $this->belongsTo(Upload::class, 'id_upload');
    }
}