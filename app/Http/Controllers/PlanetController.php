<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

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
}
