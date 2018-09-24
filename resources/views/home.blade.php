@extends('layouts.master')
@section('content')
<div class="centered">
    <a href="{{ route('greet') }}">Greet</a>
    <a href="{{ route('hug') }}">Hug</a>
    <a href="{{ route('kiss') }}">Kiss</a>
</div><br/>
<div class="centered">
    <form name="niceform" action="{{ route('niceform')}}" method="post">
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