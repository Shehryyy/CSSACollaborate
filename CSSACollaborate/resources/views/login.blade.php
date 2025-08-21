
{{-- Use the plain layout for the login page since no sidebar or topbar is needed --}}
<x-layouts.plain-layout title="Login - CSSACollaborate">
    {{-- Horizontal container lays out the login CSSA Collaborate on the left, and login form on the right --}}
    <div class="login-layout-container">
        <div class="stack-container">
            <h1 class="big-h1" id="collaborate-title-base" class="text-normal">Collaborate.</h1>
            <h1 class="big-h1 outlined-text" id="collaborate-title-layer">Collaborate.</h1>
        </div>
        <div id="vanier-logo-container" class="vertical-container">
            <h1 id="vanier-cssa-title" class="text-muted">Vanier <span class="text-accent">CSSA</span></h1>
            <img class="vanier-logo" src="{{ Vite::asset('resources/images/vaniercssa_logo.png') }}" alt="Vanier College Logo">
        </div>
        <div class="login-form-container">
            <div class="login-form-header">
                <h1 id="login-form-title">Login to your Account</h1>
                <h4 id="login-form-subtitle">And find your next coding adventure</h4>
                <hr class="login-form-separator">
            </div>
            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <x-inputs.text-input labelText="Email" name="email" :value="old('email')"/>

                <div class="password-input-container">
                    <x-inputs.text-input labelText="Password" name="password" :password="true"/>
                    <a href="/login" class="redirect-link">Forgot password?</a>
                </div>

                <div class="login-container">
                    <button class="button-primary" type="submit">Login</button>
                    <p class="text-muted">Don't have an account? <a href="/login" class="redirect-link">Register.</a></p>
                </div>
            </form>
        </div>
    </div>
</x-layouts.plain-layout>