<?php

namespace App\Http\Controllers;

use App\Models\Difficulty;
use Illuminate\Http\Request;

class DifficultyController extends Controller
{
    public function getAll()
    {
        $difficulties = Difficulty::all();
        return $difficulties;
    }

    public function getSingle(int $id)
    {
        $difficult = Difficulty::find($id);
        return $difficult;

    }

    public function create()
    {

    }
}
