@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1 class="mb-4">Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
