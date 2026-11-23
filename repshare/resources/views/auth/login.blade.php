
@extends('layouts.app')

@section('title', 'Login | RepShare')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <x-card title="Login to RepShare">
                    <form method="POST" action="{{ route('login.user') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input
                                type="text"
                                name="username"
                                id="username"
                                class="form-control"
                                value="{{ old('username') }}"
                                required
                                autofocus
                            >

                            @error('username')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                required
                            >

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Login
                        </button>

                    </form>

                    <hr>

                    <p class="text-center mb-0">
                        Don't have an account?
                        <a href="{{ route('register') }}">Register here</a>
                    </p>
                </x-card>
            </div>
        </div>
    </div>
@endsection