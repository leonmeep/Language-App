<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Services\JsonResponseService;
use http\Env\Request;

class FriendController extends Controller
{

    public function __construct(JsonResponseService $responseService)
    {
        $this->responseService = $responseService;
    }
    public function getAll()
    {
        $hidden = ['created_at', 'Updated_at'];

        return response()->json($this->responseService->getFormat(
            'Friends returned.',
            Friend::all()->makeHidden($hidden)
        ));
    }

    public function find(int $id)

    {
        $hidden = ['email', 'id'];

        return response()->json($this->responseService->getFormat(
            'Friend returned.',
            Friend::with(['languages:name, '])->find($id)->makeHidden($hidden)
        ));

    }

}
