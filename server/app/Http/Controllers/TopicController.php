<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Resources\Topic AS TopicResource; //APIリソースを使用

/**
 * APIエンドポイントを設定する
 */
class TopicController extends Controller
{
    /**
     * // 一覧表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TopicResource::collection(Topic::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topic = new Topic;
        $topic->title = $request->input('title','');
        $topic->content = $request->input('content','');
    
        $topic->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        return new TopicResource($topic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * 更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $topic->title = $request->input('title','');
        $topic->content = $request->input('content','');
    
        $topic->save();
    }

    /**
     * 削除
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
    }
}
