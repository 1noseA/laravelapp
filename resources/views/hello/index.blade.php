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
  <table>
  @foreach ($data as $item)
  <tr>
    <th>{{$item['name']}}</th>
    <td>{{$item['mail']}}</td>
  </tr>
  @endforeach
  </table>
@endsection

@section('footer')
copyright 2020 nose.
@endsection