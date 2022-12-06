<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    //エロクアント
    public function index() {
        $values = Test::all();

    // クエリビルダ

        $query = DB::table('tests')->where('text')->get();

        dd($values, $query);
        return view('tests.test', compact('values'));
    }
}
