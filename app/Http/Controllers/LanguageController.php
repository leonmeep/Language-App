<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Services\JsonResponseService;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    private JsonResponseService $responseService;

    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }
    public function find(int $id)
    {
        return response()->json($this->responseService->getFormat(
            'Language Returned.',
            Language::with([
                'difficulties:id, name, language_id', 'friends:id, name, languages_id'
            ])->find($id)
        ));

    }
}
