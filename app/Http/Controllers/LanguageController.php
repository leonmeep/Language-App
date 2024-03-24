<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Services\JsonResponseService;
use Illuminate\Support\Facades\Lang;

class LanguageController extends Controller
{
    private JsonResponseService $responseService;


    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    public function getAll()
    {
        $hidden = ['created_at', 'updated_at', 'spoken_by'];

        return response()->json($this->responseService->getFormat(
            'Languages returned.',
            Language::all()->makeHidden($hidden)
                ));


    }

    public function find(int $id)
    {
        return response()->json($this->responseService->getFormat(
            'Language returned',
                Language::with(['friends:name', 'difficulty_id'])->find($id)
            ));
    }


}
