<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Services\JsonResponseService;

class LanguageController extends Controller
{
    private JsonResponseService $responseService;

    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    public function getAll()
    {
        $languages = Language::all();

        return $languages;
    }

    public function find(int $id)
    {
        return response()->json($this->responseService->getFormat(
            'Language Returned.',
            Language::find($id)
        ));

    }
}
