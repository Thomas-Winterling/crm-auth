@extends('layouts.app')

@section('content')
    <div class="grid h-screen place-items-center">
        <div class="grid rounded-md w-[500px] shadow-md bg-white p-3">
            <form action="{{ route('register') }}" method="POST" class="grid gap-4">
                @csrf
                <span class="text-xl">
                    Register
                </span>
                @if(session()->has('status'))
                    <div class="p-3 2-full rounded-md text-white bg-blue-100 font-bold">
                        {{  session()->get('status') }}
                    </div>
                @endif    
                <div class="grid gap-3">
                    <label for="Name" class="text-lg font-bold">Name</label>
                    <input type="text" name="name"  id="" class="border-2 p-2 rounded-md outline-gray-3000" value="{{ old('name') }}"/>
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-3">
                    <label for="Username" class="text-lg font-bold">Username</label>
                    <input type="text" name="username"  id="" class="border-2 p-2 rounded-md outline-gray-3000" value="{{ old('username') }}"/>
                    @error('username')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-3">
                    <label for="Email" class="text-lg font-bold">Email</label>
                      <input type="email" name="email"  id="" class="border-2 p-2 rounded-md outline-gray-3000" value="{{ old('email') }}"/>
                      @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-3">
                    <label for="Password" class="text-lg font-bold">Password</label>
                    <input type="password" name="password"  id="" class="border-2 p-2 rounded-md outline-gray-3000"/>
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white p-3 rounded-md">Register</button>
                </div>
            </form>
            
        </div>
    <div>
@endsection