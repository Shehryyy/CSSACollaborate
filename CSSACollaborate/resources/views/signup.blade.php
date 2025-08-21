<x-layouts.plain-layout title="Sign Up - CSSACollaborate">
    <div class="signup-layout-container">
        <div class="logo"><span>CSSA</span> Collaborate</div>
        <div class="login-form-container">
            <div class="login-form-header">
                <h1>Create an Account</h1>
                <h4>And find your new coding adventure.</h4>
                <hr class="login-form-separator">
            </div>

            <form id="signup-form" method="POST" action="{{ route('signUp.verify') }}">
                @csrf

                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required />

                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required />

                <label for="school_email">School Email</label>
                <input type="email" id="school_email" name="school_email" required />

                <label for="password">Create a password</label>
                <input type="password" id="password" name="password" required />
                <small>Your password must contain 8 characters</small>

                <label for="password_confirmation">Confirm your password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required />

                <label for="discord_username">Discord Username</label>
                <input type="text" id="discord_username" name="discord_username" required />
                <small>If you don't have one, please create one</small>

                <button type="submit" class="btn-create">Create</button>
            </form>

            <a href="{{ route('signup.form') }}" class="back-link">Back</a>
        </div>
    </div>
</x-layouts.plain-layout>
