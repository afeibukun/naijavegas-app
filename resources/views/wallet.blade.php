@extends('layouts.app')


@section('content')
<div class="wrapper bg-secondary">
    <div class="section section-heroine section-shaped py-2">
      <div class="container">
        <div class="row my-2">
          <div class="col p-3" style="">
            <div class="banner-caption text-center">
              <div class="px-2 shadow-sm bg-naija-vegas-green-02 position-relative "  style="padding-top:3px;padding-bottom:3px; border-left: 4px solid #000;">
                <h5 class="my-1 text-left">
                  
                  <span class="font-weight-bold text-white">My Wallet</span>
                </h5>
              </div>
              <div class="mt-2">
                @auth
                <p class="m-0">
                  <i class="ni ni-circle-08 mr-1 text-dark" style="font-size:80px;"></i>
                </p>
                <h2 class="display-3 borderRightLeft">Hi, {{ auth()->user()->profile->firstname }}</h2>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section section-shaped pt-0">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-2">
              <div class="card">
                  <div class="card-body">
                      <div>
                          <h4>Wallet Balance</h4>

                          <div>
                              <h6>Available Balance</h6>
                              <h2>$120</h2>
                          </div>

                          <div>
                            <h6>Bonus Balance</h6>
                            <h2>$20</h2>
                            </div>
                            <div>
                                <h6>Betting Balance</h6>
                                <h2>$72</h2>
                            </div>
                      </div>
                  </div>
              </div>

            </div>

            <div class="col-md-6 mb-2">
                <div class="card" style="height:100%;">
                    <div class="card-body">
                        <div>
                            <h4>Fund Wallet</h4>
  
                            <div>
                                <form role="form" method="POST" action="{{ route('changePassword') }}">
                                    @csrf 
                                    <div class="form-group mb-3">
                                      <label for="">Amount</label>
                                      <div class="input-group ">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far far-plus-square"></i></span>
                                        </div>
                                        <input type="amount" class="form-control @error('amount') is-invalid @enderror" name="amount"  required  autofocus>
                                      </div>
                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
          
                                    <div class="text-center">
                                      <button type="submit" class="btn btn-primary-naija-vegas my-4">Fund Wallet</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
  
              </div>
          </div>
        </div>
    </section>
</div>
@endsection
