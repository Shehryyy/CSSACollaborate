
{{-- Use the plain layout for the login page since no sidebar or topbar is needed --}}
<x-layouts.plain-layout title="Login - CSSACollaborate">
    {{-- Horizontal container lays out the login CSSA Collaborate on the left, and login form on the right --}}
    <div class="horizontal-container">
        <div class="vertical-container">
            <div class="stack-container">
                <h1 class="big-h1" id="collaborate-title-base" class="text-normal">Collaborate.</h1>
                <h1 class="big-h1 outlined-text" id="collaborate-title-layer">Collaborate.</h1>
            </div>
            <div class="vertical-container">
                <h1 id="vanier-cssa-title" class="text-muted">Vanier <span class="text-accent">CSSA</span></h1>
                <img class="vanier-logo" src="{{ Vite::asset('resources/images/vaniercssa_logo.png') }}" alt="Vanier College Logo">
            </div>
        </div>
    </div>
</x-layouts.plain-layout>