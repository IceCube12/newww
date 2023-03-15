@include ("partials.header")

<!-- <form action="/login/process" method="POST">
@csrf

@error('email')
<p>Invalid Account</p>
@enderror

<div class="form-outline mb-4">
<label for="exampleInputEmail1" class="form-label">Email Address:</label>
<input type="email" class="form-control" id="exampleInputEmail1" name="email">
</div>

<div class="form-outline mb-4">
<label for="exampleInputPassword1" class="form-label">Password:</label>
<input type="password" class="form-control" id="exampleInputPassword1" name="password">
</div>


<button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
<h6><a href={{"/register"}}>New User? Sign up here.</a></h6>
</form>


@include('partials.footer') -->

<form action="/login/process" method="Post">
@CSRF
@error('email')
<p>Invalid Account</p>
@enderror
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
            
          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href={{"/register"}}>New User? Sign up here.</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</section>

</form>
@include("partials.footer")