<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = "series";

    protected $fillable = ['nome'];

    public $timestamps = false;

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }
}