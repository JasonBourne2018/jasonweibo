@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>Hello Miracle</h1>
    <p class="lead">你现在看到的是 <a href="#">Miracle's Weibo</a></p>
    <p>Everything begins from now in here</p>
    <p><a class="btn btn-lg btn-success" role="button" href="{{ route('signup') }}" role="button">Sign up</a></p>
  </div>
@stop
