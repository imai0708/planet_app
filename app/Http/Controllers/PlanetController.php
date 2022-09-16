<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // モデル名::テーブル全件取得
        $planets = Planet::all();
        // memosティレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('planets.index', ['planets' => $planets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanetRequest $request)
    {
        // インスタンスの作成
        $planet = new Planet;

        // 値の用意
        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // インスタンスに値を設定して保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlanetRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $planet = Planet::find($id);

        // 値の用意
        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // 保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
