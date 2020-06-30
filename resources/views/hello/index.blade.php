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
  @if (count($errors) > 0)
  <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="/hello" method="post">
  <table>
    @csrf
    @if ($errors->has('msg'))
    <tr>
      <th>ERROR</th>
      <td>{{$errors->first('msg')}}</td>
    </tr>
    @endif
    <tr>
      <th>Message: </th>
      <td><input type="text" name="msg" value="{{old('msg')}}"></td>
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