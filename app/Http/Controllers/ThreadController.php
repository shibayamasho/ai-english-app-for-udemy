<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\UpdateThreadRequest;
use App\Models\Thread;

class ThreadController extends Controller
{
    /**
     * トップ画面表示
     */
    public function index(): InertiaResponse
    {
        $threads = Thread::orderBy('id', 'desc')->get(); // スレッドデータを取得
        return Inertia::render('Top', [
            'threads' => $threads, // フロントエンドに渡す
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThreadRequest $request)
    {
        //
    }

    /**
     * 英会話画面表示
     */
    public function show(Thread $thread)
    {
        $threads = Thread::orderBy('id', 'desc')->get(); // スレッドデータを取得
        return Inertia::render('Thread/Show', [
            'threads' => $threads, // フロントエンドに渡す
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThreadRequest $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
