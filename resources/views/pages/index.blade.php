@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to BlogLaravel</h1>
        {{-- <p>This is the Blog application from the "Laravel From Scratch" YouTube series</p> --}}
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection 