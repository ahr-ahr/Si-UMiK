@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <h1 class="mb-4">Create User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password Confirmation:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
