<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verify Email - CSSA Collaborate</title>
  @vite('resources/css/signupVerify.css')
</head>
<body>
<div class="logo"><span>CSSA</span> Collaborate</div>
  <div class="container">
    <div class="text-content">
      <main>
        <h2>Verify your email</h2>
        <p>Enter the 6-digit verification code sent to your email</p>
        <div class="code-input">
          <input type="text" maxlength="1">
          <input type="text" maxlength="1">
          <input type="text" maxlength="1">
          <input type="text" maxlength="1">
          <input type="text" maxlength="1">
          <input type="text" maxlength="1">
        </div>
        <button class="verify-btn">Verify</button>
        <a href="#" class="back-link">Back</a>
      </main>
    </div>
    <div class="images">
      <img src="{{ asset('images/order.png') }}" alt="Order Management">
      <img src="{{ asset('images/profile.png') }}" alt="Profile Page">
    </div>
  </div>
</body>
</html>
