<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratMasuk extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    public $table = "suratmasuk";

    function getTanggalStringAttribute()
    {
        $tanggal = $this->tanggal;
        return strftime("%d %B %Y", strtotime($this->tanggal));
    }
}