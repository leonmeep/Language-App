<?php

namespace App\Http\Controllers;

use App\Services\JsonResponseService;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function _construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }
    public function find(int $id)
    {

    }
}
