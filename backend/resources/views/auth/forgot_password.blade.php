<div class="container">
    <h4>Lupa Password</h4>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required class="form-control">
        <button type="submit" class="btn btn-primary mt-2">Kirim Link Reset</button>
    </form>
</div>