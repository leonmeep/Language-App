<?php

namespace App\Http\Controllers;

use App\Models\Difficulty;
use App\Services\JsonResponseService;
use Illuminate\Http\Request;

class DifficultyController extends Controller
{
    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }
    public function getAll()
    {
        $difficulties = Difficulty::all();
        return $difficulties;
    }

    public function find(int $id)
    {
        return response()->json($this->responseService->getFormat(
            'Difficulty returned',
            Difficulty::with([
                'languages:id,name,difficulty_id'
            ])->find($id)
        ));

    }

    public function create()
    {

    }
}
