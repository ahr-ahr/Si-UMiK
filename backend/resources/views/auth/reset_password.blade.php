@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Reset Password</h4>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <label>Email</label>
        <input type="email" name="email" required class="form-control">

        <label>Password Baru</label>
        <input type="password" name="password" required class="form-control">

        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required class="form-control">

        <button type="submit" class="btn btn-success mt-2">Reset Password</button>
    </form>
</div>
@endsection
