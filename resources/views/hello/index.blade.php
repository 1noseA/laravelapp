<!-- layoutsフォルダのhelloapp.blade.phpを親レイアウトとして継承 -->
@extends('layouts.helloapp')
<style>
  .pagination { font-size:10pt; }
  .pagination li { display:inlign-block }
</style>

<!-- セクション名, 表示する値 -->
@section('title', 'Index')

<!-- endsectionを併用した書き方 -->
{{-- @endsectionを併用した書き方 --}}
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr>
      <th>Name</th>
      <th>Mail</th>
      <th>Age</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
    @endforeach
  </table>
  {{ $items->links() }}
@endsection

@section('footer')
copyright 2020 nose.
@endsection