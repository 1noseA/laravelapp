<!-- layoutsフォルダのhelloapp.blade.phpを親レイアウトとして継承 -->
@extends('layouts.helloapp')

<!-- セクション名, 表示する値 -->
@section('title', 'Index')

<!-- endsectionを併用した書き方 -->
{{-- @endsectionを併用した書き方 --}}
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>これが本文のコンテンツです。</p>
  <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
copyright 2020 nose.
@endsection