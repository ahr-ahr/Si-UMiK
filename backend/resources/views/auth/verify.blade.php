<div>
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    @if (Auth::user() && !Auth::user()->hasVerifiedEmail())
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit">Resend Verification Link</button>
        </form>
    @else
        <p>Your email is already verified!</p>
    @endif
</div>
