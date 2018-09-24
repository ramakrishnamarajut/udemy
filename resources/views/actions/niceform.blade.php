@extends('layouts.master')
@section('content')
<a href="{{ route('home')}}">Back</a>
<div class="centered">
<h1> I {{ $action }} {{ $name }} !</h1>
</div>
@endsection