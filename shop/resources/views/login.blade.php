<!doctype html>
<html lang="en">

<head>
      @include('head')

</head>

<body>
      <!-- navbar start -->
      @include('heade')
      <!-- navbar ends -->
      <!-- main content start  -->
      <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                  <div class="authentication-inner">
                        <!-- Register -->
                        <div class="card">
                              <div class="card-body">
                                    <div class="app-brand justify-content-center">
                                          <h1>Đăng nhập</h1>
                                    </div>
                                    <h4 class="mb-2">Welcome to Sneat! 👋</h4>
                                    <p class="mb-4">Vui lòng đăng nhập vào tài khoản của bạn và bắt đầu </p>

                                    <form id="formAuthentication" class="mb-3" action="admin/users/login/store"
                                          method="POST">
                                          <div class="mb-3">
                                                <label for="email" class="form-label">Email or Username</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                      placeholder="Enter your email or username" autofocus />
                                          </div>
                                          <div class="mb-3 form-password-toggle">
                                                <div class="d-flex justify-content-between">
                                                      <label class="form-label" for="password">Password</label>
                                                      <a href="auth-forgot-password-basic.html">
                                                            <small>Forgot Password?</small>
                                                      </a>
                                                </div>
                                                <div class="input-group input-group-merge">
                                                      <input type="password" id="password" class="form-control"
                                                            name="password"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                            aria-describedby="password" />
                                                      <span class="input-group-text cursor-pointer"><i
                                                                  class="bx bx-hide"></i></span>
                                                </div>
                                          </div>
                                          <div class="mb-3">
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="remember-me"
                                                            name="remember" />
                                                      <label class="form-check-label" for="remember-me"> Remember Me
                                                      </label>
                                                </div>
                                          </div>
                                          <div class="mb-3">
                                                <button class="btn btn-primary d-grid w-100" type="submit">Sign
                                                      in</button>
                                          </div>
                                          @csrf
                                    </form>


                              </div>
                        </div>
                        <!-- /Register -->
                  </div>
            </div>
      </div>

      <!-- / Content -->


      <!-- main content ends -->
      <div class="footer-section mt-5">
            <p class="text-center m-0 text-white">2022 © Copyright by HPC</p>
      </div>
      @include('footer')



</body>

</html>