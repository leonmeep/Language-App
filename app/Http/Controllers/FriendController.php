<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Services\JsonResponseService;

class FriendController extends Controller
{
    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }
    public function getAll()
    {
        $friends = Friend::all();
        return $friends;
    }

    public function find(int $id)
    {
        return response()->json($this->responseService->getFormat(
            'Friend returned',
            Friend::with(['friends', 'languages'])->find($id)
        ));
    }
}
