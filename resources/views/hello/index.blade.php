@extends('layouts.helloapp')

@section('title', 'Index')
<!-- titleというセクションにIndexという文字列を入れる -->

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  @if (Auth::check())
    <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
   @else
    <p>Not Login(<a href="/login">LOGIN</a><a href="/register">REGISTER</a></p>
   @endif
<table>
  <tr>
    <th><a href="/hello?sort=name">name</a></th>
    <th><a href="/hello?sort=mail">mail</a></th>
    <th><a href="/hello?sort=age">age</a></th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
  </tr>
  @endforeach
</table>
{{  $items->appends(['sort' => $sort])->links() }}

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
