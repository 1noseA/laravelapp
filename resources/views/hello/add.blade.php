@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
  @parent
  新規作成ページ
@endsection

@section('content')
  <form action="/hello/add" method="post">
    <table>
      @csrf
      <tr>
        <th>name: </th>
        <td><input typt="text" name="name"></td>
      </tr>
      <tr>
        <th>mail: </th>
        <td><input typt="text" name="mail"></td>
      </tr>
      <tr>
        <th>age: </th>
        <td><input typt="text" name="age"></td>
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