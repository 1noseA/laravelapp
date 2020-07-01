<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller {
    public function index(Request $request)
    {
        // テーブル作成の際にpeopleのつづりを間違えてしまった
        $items = DB::table('peple')->orderBy('age', 'asc')->get();
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from peple');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('peple')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $item = DB::table('peple')
        ->where('id', $request->id)->first();
        return view('hello.edit', ['form'=> $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('peple')
        ->where('id', $request->id)
        ->update($param);
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from peple where id = :id', $param);
        return view('hello.del', ['form'=> $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from peple where id = :id', $param);
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('peple')
        // 指定した位置から（下記は1ページ3レコードずつ表示される）
        ->offset($page * 3)
        // 指定した数だけ
        ->limit(3)
        ->get();
        return view('hello.show', ['items' => $items]);
    }
}