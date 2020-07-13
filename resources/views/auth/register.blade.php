@extends('layouts.app')

@section('content')

<div class="wrapper">
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1" style="background-color: #f4f5f7" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white">
                <div class="text-muted text-center ">
                    <h4 class="display-4 mb-0 text-center">
                        Welcome to Naija Vegas 
                    </h4>
                    <small>Let us get you started</small>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-group @error('firstname') has-danger @enderror">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                      </div>
                      <input class="form-control form-control-alternative @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="firstname" type="text">
                    </div>
                    @error('firstname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group @error('lastname') has-danger @enderror">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                      </div>
                      <input class="form-control form-control-alternative @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="lastname" type="text">
                    </div>
                    @error('lastname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group @error('phonenumber') has-danger @enderror">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                      </div>
                      <input class="form-control form-control-alternative @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus placeholder="phonenumber" type="text">
                    </div>
                    @error('phonenumber')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  
                  <div class="form-group @error('email') has-danger @enderror">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control form-control-alternative @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email" autocomplete="nope">
                    </div>
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group focused @error('password') has-danger @enderror">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control form-control-alternative @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password" autocomplete="new-password">
                    </div>

                    @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
                  

                  <div class="form-group focused @error('password') has-danger @enderror">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control form-control-alternative @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" type="password">
                    </div>
                  </div>
                  
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister"><span>I agree with the <a href="#">Privacy Policy</a></span></label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary-naija-vegas mt-4">Create account</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="row mt-3">
                <div class="col-8">
                  <a href="/login" class="text-light"><small>Already have account? <em>Sign In</em></small></a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection
