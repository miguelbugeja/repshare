@extends('layouts.app')

@section('title', 'My Profile | RepShare')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <x-card title="My Profile">

                    <div class="mb-3">
                        <strong>Full Name:</strong>
                        <p>{{ $user->name }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Username:</strong>
                        <p>{{ $user->username }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p>{{ $user->email }}</p>
                    </div>

                    <hr>

                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                        Edit Profile
                    </a>

                </x-card>
            </div>
        </div>
    </div>
@endsection