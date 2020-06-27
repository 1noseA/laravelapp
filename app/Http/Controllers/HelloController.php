<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller {
    public function index(Request $request) {
        $data = [
            // index.phpがあってもbladeが優先的に読み込まれる
            'msg'=>'これはBladeを利用したサンプルです。',
        ];
        return view('hello.index', $data);
    }
}