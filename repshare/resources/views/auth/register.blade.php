
@extends('layouts.app')

@section('title', 'Register | RepShare')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Create an Account</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('register.user') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username"
                                class="form-control"
                                value="{{ old('username') }}" required>
                            @error('username')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Register
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
