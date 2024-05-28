<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Welcome</title>
</head>
<body>
<div class="hero min-h-screen" style="background-image: url('{{asset('assets/perpustakaan.jpeg')}}');">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Welcome to Your Library Buddy!</h1>
      <p class="mb-5">Let's explore the various book collections in Your Library Buddy and find an enjoyable read for you!.</p>
      <button class="btn btn-primary" type="submit"><a href="{{route('user.index')}}">Get Started</a></button>
    </div>
  </div>
</div>
</body>
</html>