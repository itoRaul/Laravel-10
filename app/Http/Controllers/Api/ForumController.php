<?php

namespace App\Http\Controllers\Api;

use App\DTO\Forums\CreateForumDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ForumService;
use App\Http\Requests\StoreUpdateForum;
use App\Http\Resources\ForumResource;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Response as HttpResponse;
use App\DTO\Forums\UpdateForumDTO;

class ForumController extends Controller
{

    public function __construct(

        protected ForumService $service,
    )
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateForum $request){

        $forum = $this->service->create(
            CreateForumDTO::makeFromRequest($request)
        );

        return new ForumResource($forum);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){

        if(!$forum = $this->service->getById($id)){
            return response()->json(['error' => 'Forum not found'], HttpResponse::HTTP_NOT_FOUND);//404
        }
        return new ForumResource($forum);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateForum $request, string $id)
    {
        $forum = $this->service->update(
            UpdateForumDTO::makeFromRequest($request)
        );

        if(!$forum){
            return response()->json(['error' => 'Forum not found'], HttpResponse::HTTP_NOT_FOUND);
        }
        return new ForumResource($forum);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){

        if(!$this->service->getById($id)){
            return response()->json(['error' => 'Forum not found'], HttpResponse::HTTP_NOT_FOUND);
        }

        $this->service->delete($id);
        return response()->json([], HttpResponse::HTTP_NO_CONTENT);

    }
}
