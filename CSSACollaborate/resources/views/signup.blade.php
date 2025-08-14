<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create an Account</title>
    @vite('resources/css/signup.css')
</head>
<body>
    <div class="logo"><span>CSSA</span> Collaborate</div>
    <div class="container">
        <h2>Create an Account</h2>
        <p class="subtitle">And find your new coding adventure.</p>

        <form action="{{ route('signUp.verify') }}" method="POST">
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

        <a href="#" class="back-link">Back</a>
    </div>
</body>
</html>
