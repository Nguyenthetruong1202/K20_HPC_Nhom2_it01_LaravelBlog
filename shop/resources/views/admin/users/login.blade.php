<!DOCTYPE html>


<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
      data-template="vertical-menu-template-free">

<head>
      @include('admin.head')
</head>

<body>
      <!-- Content -->

      <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                  <div class="authentication-inner">
                        <!-- Register -->
                        <div class="card">
                              <div class="card-body">
                                    <!-- Logo -->
                                    <div class="app-brand justify-content-center">
                                          <a href="index.html" class="app-brand-link gap-2">
                                                <span class="app-brand-logo demo">
                                                      <svg width="25" viewBox="0 0 25 42" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="g-app-brand" stroke="none" stroke-width="1"
                                                                  fill="none" fill-rule="evenodd">
                                                                  <g id="Brand-Logo"
                                                                        transform="translate(-27.000000, -15.000000)">
                                                                        <g id="Icon"
                                                                              transform="translate(27.000000, 15.000000)">
                                                                              <g id="Mask"
                                                                                    transform="translate(0.000000, 8.000000)">
                                                                                    <mask id="mask-2" fill="white">
                                                                                          <use xlink:href="#path-1">
                                                                                          </use>
                                                                                    </mask>
                                                                                    <use fill="#696cff"
                                                                                          xlink:href="#path-1"></use>
                                                                                    <g id="Path-3" mask="url(#mask-2)">
                                                                                          <use fill="#696cff"
                                                                                                xlink:href="#path-3">
                                                                                          </use>
                                                                                          <use fill-opacity="0.2"
                                                                                                fill="#FFFFFF"
                                                                                                xlink:href="#path-3">
                                                                                          </use>
                                                                                    </g>
                                                                                    <g id="Path-4" mask="url(#mask-2)">
                                                                                          <use fill="#696cff"
                                                                                                xlink:href="#path-4">
                                                                                          </use>
                                                                                          <use fill-opacity="0.2"
                                                                                                fill="#FFFFFF"
                                                                                                xlink:href="#path-4">
                                                                                          </use>
                                                                                    </g>
                                                                              </g>
                                                                              <g id="Triangle"
                                                                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                                                    <use fill="#696cff"
                                                                                          xlink:href="#path-5"></use>
                                                                                    <use fill-opacity="0.2"
                                                                                          fill="#FFFFFF"
                                                                                          xlink:href="#path-5"></use>
                                                                              </g>
                                                                        </g>
                                                                  </g>
                                                            </g>
                                                      </svg>
                                                </span>
                                                <span class="app-brand-text demo text-body fw-bolder">nhóm 2</span>
                                          </a>
                                    </div>
                                    <!-- /Logo -->
                                    <p class="mb-4">đăng nhập vào hệ thống để bát đầu </p>
                                    @include('admin.alert')
                                    <form id="formAuthentication" class="mb-3" action="/admin/users/login/store"
                                          method="POST">

                                          <div class="mb-3">
                                                <label for="email" class="form-label">Email or Username</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                      placeholder="Enter your email or username" autofocus
                                                      value="{{old('email')}}" />
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
                                                      <input name="
                                                      remember" class="form-check-input" type="checkbox"
                                                            id="remember-me" />
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

                                    <p class="text-center">
                                          <span>New on our platform?</span>
                                          <a href="auth-register-basic.html">
                                                <span>Create an account</span>
                                          </a>
                                    </p>
                              </div>
                        </div>
                        <!-- /Register -->
                  </div>
            </div>
      </div>

      <!-- / Content -->

      <div class="buy-now">
            <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
                  class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
      </div>
      @include('admin.footer')
</body>

</html>