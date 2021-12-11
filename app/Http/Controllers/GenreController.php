<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * @return Genre[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Genre::all();
    }
}
