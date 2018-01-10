@include('layouts.header')
<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Kbet</span><strong class="text-primary"> Customer Marketing</strong></div>
            <form id="login-form" method="post">
              <div class="form-group">
                <label for="login-username" class="label-custom">User Name</label>
                <input id="login-username" type="text" name="loginUsername" required="">
              </div>
              <div class="form-group">
                <label for="login-password" class="label-custom">Password</label>
                <input id="login-password" type="password" name="loginPassword" required="">
              </div><a id="login" href="index.html" class="btn btn-primary">Login</a>
            </form>
          </div>
        </div>
      </div>
    </div>