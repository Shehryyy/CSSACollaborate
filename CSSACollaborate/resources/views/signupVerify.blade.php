<x-layouts.plain-layout title="Verify Email - CSSACollaborate">
    <x-layouts.logo-layout/>
    <div class="verify-wrapper">
        <div class="verify-layout-container">
            <div class="form-card">
                <div class="form-header">
                    <h1>Verify your email</h1>
                    <h4>Enter the 6-digit verification code sent to your email</h4>
                </div>

                <form id="verify-form" method="POST" action="#">
                    @csrf
                    <div class="code-input">
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                    </div>

                    <button type="submit" class="verify-btn">Verify</button>
                </form>

                <a href="{{ route('signup.form') }}" class="back-link">Back</a>
            </div>

            <div class="images">
                <img src="{{ asset('images/order.png') }}" alt="Order Management">
                <img src="{{ asset('images/profile.png') }}" alt="Profile Page">
            </div>
        </div>
    </div>
</x-layouts.plain-layout>
