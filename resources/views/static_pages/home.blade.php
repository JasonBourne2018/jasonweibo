@extends('layouts.default')
@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>Hello Miracle</h1>
      <p class="lead">你现在看到的是 <a href="#">Miracle's Weibo</a></p>
      <p>Everything begins from now in here</p>
      <p><a class="btn btn-lg btn-success" role="button" href="{{ route('signup') }}" role="button">Sign up</a></p>
    </div>
  @endif
@stop
