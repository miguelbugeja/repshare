@extends('layouts.app')

@section('title', 'Edit Profile | RepShare')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <x-card title="Edit Profile">

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                value="{{ old('name', $user->name) }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input
                                type="text"
                                name="username"
                                id="username"
                                class="form-control"
                                value="{{ old('username', $user->username) }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                value="{{ old('email', $user->email) }}"
                            >
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Save Changes
                        </button>

                        <a href="{{ route('profile.show') }}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </form>

                </x-card>

            </div>
        </div>
    </div>
@endsection