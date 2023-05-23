@extends('layouts.app')

@section('content')
    <div class="w-full rounded-md p-3 shadow-md">
        Welcome {{ Auth::user()->username }}
        <a href="{{ route('logout') }}" class="text-blue-500">Logout</a>
    <div>
@endsection