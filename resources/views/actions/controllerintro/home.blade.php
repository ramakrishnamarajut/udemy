@extends('layouts.master')
@section('content')
<div class="centered">
    @foreach($actions as $action)
    <a href="#">{{ $action }}</a>
    @endforeach
    <a href="{{ route('niceaction',['action'=>'greet' ,'name'=>'harry']) }}">Greet</a>
    <a href="{{ route('niceaction',['action'=>'hug']) }}">Hug</a>
    <a href="{{ route('niceaction',['action'=>'kiss']) }}">Kiss</a>
</div><br/>
<div class="centered">
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif
    <form name="niceform" action="{{ route('nicepostaction')}}" method="post">
        <input type="hidden" name="_token" value="{{Session:: token()}}"/>
        <label>I want to... </label>
        <select name="action">
            <option value="greet">Greet</option>
            <option value="hug">Hug</option>
            <option value="kiss">Kiss</option>
        </select>
        <input type="text" name="name"/>
        <button type="submit">Do a nice action</button>
    </form>
</div>
@endsection