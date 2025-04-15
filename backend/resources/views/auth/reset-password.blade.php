<div class="container">
    <h4>Reset Password</h4>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <input type="email" name="email" value="{{ old('email', $email) }}" required readonly>

        <input type="password" name="password" required placeholder="New Password">
        <input type="password" name="password_confirmation" required placeholder="Confirm Password">

        <button type="submit">Reset Password</button>
    </form>
</div>
