<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Login now!</h1>
      <p class="py-6">Hey there! Time to log in and unlock all the awesome stuff on our site. Just enter your details and you're good to go. Let's do this.</p>
    </div>
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
    <form  method="post" class="card-body" action="{{route('user.login')}}">
      @csrf
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="email" class="input input-bordered" name="email" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="password" class="input input-bordered" name="password" required />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
          </label>
        </div>
        <div class="form-control mt-6">
        <button type="submit" class="border-2 border-solid border-black rounded-md 
                    bg-black text-white hover:bg-gray-600 py-2 mt-2" name="submit"><a href="{{route('perpustakaan.index')}}">Login</a></button>
          <p class="text-sm text-gray-500">Don't have an account? <a href="{{route('register')}}" class="hover:text-black">Sign up</a></p>
        </div>
</form>
    </div>
  </div>
</div>
</body>
</html>