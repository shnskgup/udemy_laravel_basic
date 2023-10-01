<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index ()
    {
        $values = Test::all();

        //Eloquent -> collection型
        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereBBB = Test::where('text', '=', 'bbb')->get();

        //query builder
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}