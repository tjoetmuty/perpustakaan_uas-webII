<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Login now!</h1>
      <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
    </div>
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
    <form action="{{route('register.store')}}" method="post" class="card-body">
      @csrf
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="email" class="input input-bordered" name="email" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Username</span>
          </label>
          <input type="text" placeholder="email" class="input input-bordered" name="name" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="password" class="input input-bordered" name="password" required />
        </div>
        <div class="form-control mt-6">
        <button type="submit" class="border-2 border-solid border-black rounded-md 
                    bg-black text-white hover:bg-gray-600 py-2 mt-2" name="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>