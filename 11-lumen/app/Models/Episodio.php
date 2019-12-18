<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $table = "episodios";

    protected $fillable = ['nome'];

    public $timestamps = false;

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}