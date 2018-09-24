@extends('layouts.master')
@section('content')
<a href="{{ route('controllerhome')}}">Back</a>
<div class="centered">
<h1>I Greet {{  $name === null ? 'You': $name }}!This is from controller Action</h1>
</div>
@endsection