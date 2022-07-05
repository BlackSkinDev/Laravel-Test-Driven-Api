<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoListRequest;
use App\Models\TodoList;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\Feature\TodoListTest;

class TodoListController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     *
     *
     *
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $lists  = TodoList::all();
        return  $this->success($lists,null,Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TodoListRequest $request
     * @return JsonResponse
     */
    public function store(TodoListRequest $request): JsonResponse
    {
        $list = TodoList::create($request->validated());
        return  $this->success($list, null,Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param TodoList $todolist
     * @return JsonResponse
     */
    public function show(TodoList $list): JsonResponse
    {
        return $this->success($list,null,Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
