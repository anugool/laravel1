@include('layouts.header')
<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Kbet</span><strong class="text-primary"> Customer Marketing</strong></div>

            @include('partials.errors')

            <form action="login" method="post" id="login-form" >

               {{ csrf_field() }}

              <div class="form-group">
                <input id="login-username" type="text" name="username" required>
              </div>

              <div class="form-group">
                <input id="login-password" type="password" name="password" required>
              </div>

              <button type="submit" class="btn btn-primary">Login</button>

            </form>

          </div>
        </div>
      </div>
    </div>
