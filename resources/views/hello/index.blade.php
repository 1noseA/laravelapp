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
  <il>
  @each('component.item', $data, 'item')
  </ul>

@endsection

@section('footer')
copyright 2020 nose.
@endsection