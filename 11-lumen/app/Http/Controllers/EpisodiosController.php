<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Http\Controllers\BaseController;

class EpisodiosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodio::class;
    }
}
