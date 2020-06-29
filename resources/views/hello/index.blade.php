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
  <p>{{$msg}}</p>
  <form action="/hello" method="post">
  <table>
    @csrf
    <tr>
      <th>name: </th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>mail: </th>
      <td><input type="text" name="mail"></td>
    </tr>
    <tr>
      <th>age: </th>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
  </form>
@endsection

@section('footer')
copyright 2020 nose.
@endsection