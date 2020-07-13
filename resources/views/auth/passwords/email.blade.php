@extends('layouts.app')

@section('content')
<section class="section section-shaped section-lg">
    <div class="shape shape-style-1" style="background-color:#f4f5f7">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white ">
                <div class="text-muted text-center ">
                    <h4 class="display-4 mb-0 text-center">
                        Reset Password
                    </h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">

              <form role="form" method="POST" action="{{ route('password.email') }}">

                @csrf 

                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                
                <div class="text-center">
                  <button type="button" class="btn btn-primary-naija-vegas my-4">Send Password Reset Link</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
                @if (Route::has('password.request'))
                    <a href="javascript:history.back();" class="text-light"><small>Back</small></a>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
