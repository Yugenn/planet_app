<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Database\Seeders\PlanetSeeder;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{       // showページへ移動
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $planets = Planet::all();
        // Planetsディレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(PlanetRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $planet = Planet::find($id);

        // 値の用意
        $planet->name = $request->name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // 保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();
        return redirect('/planets');
    }

    public function create()
    {
        return view('/planets.create');
    }

    public function store(PlanetRequest $request)
    {
        // インスタンスの作成
        $planet = new Planet;
        // 値の用意
        $planet->name = $request->name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        // インスタンスに値を設定して保存
        $planet->save();
        // 登録したらindexに戻る
        return redirect('/planets');
    }
}
