<!-- layoutsフォルダのhelloapp.blade.phpを親レイアウトとして継承 -->
@extends('layouts.helloapp')

<!-- セクション名, 表示する値 -->
@section('title', 'Index')

<!-- @endsectionを併用した書き方 -->
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>これが本文のコンテンツです。</p>
  <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2020 nose.
@endsection