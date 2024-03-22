<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Services\JsonResponseService;

class ContinentController extends Controller
{
    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    public function getAll()
    {
        $continents = Continent::all();

        return $continents;

    }

    public function find(int $id)
    {
        return response()->json($this->responseService->getFormat(
            'Continent returned',
            Continent::with([
                'languages:id,name,continent_id',
            ])->find($id)
        ));
    }
}
