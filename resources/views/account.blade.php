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
                  
                  <span class="font-weight-bold text-white">My Account</span>
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
            <div class="col">
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link nav-link-naija-vegas mb-sm-3 mb-md-0 @if(request('option') === "player-info" || request('option') === null)active @endif" id="tabs-player-info-tab" data-toggle="tab" href="#tabs-player-info" role="tab" aria-controls="tabs-player-info" aria-selected="true"><i class="fas fa-user-alt mr-2"></i>Player Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-naija-vegas mb-sm-3 mb-md-0 @if(request('option') === "bet-history")active @endif" id="tabs-bet-history-tab" data-toggle="tab" href="#tabs-bet-history" role="tab" aria-controls="tabs-bet-history" aria-selected="false"><i class="fas fa-history mr-2"></i>Bet History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-naija-vegas mb-sm-3 mb-md-0 @if(request('option') === "inbox")active @endif" id="tabs-inbox-tab" data-toggle="tab" href="#tabs-inbox" role="tab" aria-controls="tabs-inbox" aria-selected="false"><i class="far fa-envelope mr-2"></i>Inbox</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-naija-vegas mb-sm-3 mb-md-0 @if(request('option') === "change-password")active @endif" id="tabs-change-password-tab" data-toggle="tab" href="#tabs-change-password" role="tab" aria-controls="tabs-change-password" aria-selected="false"><i class="fas fa-lock mr-2"></i>Change Password</a>
                  </li>
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade @if(request('option') === "player-info" || request('option') === null)active show @endif " id="tabs-player-info" role="tabpanel" aria-labelledby="tabs-player-info-tab">
                      <div>
                        <small class="text-uppercase text-muted font-weight-bold">Player Name</small><br/>
                        <p> {{ auth()->user()->fullname() }}</p>
                      </div>
    
                      <div>
                        <small class="text-uppercase text-muted font-weight-bold">Mobile Number</small><br/>
                        <p> {{ auth()->user()->phonenumber }}</p>
                      </div>
    
                      <div>
                        <small class="text-uppercase text-muted font-weight-bold">Email Address</small><br/>
                        <p> {{ auth()->user()->email }}</p>
                      </div>
                    </div>
                    <div class="tab-pane fade @if(request('option') === "bet-history")active show @endif" id="tabs-bet-history" role="tabpanel" aria-labelledby="tabs-bet-history-tab">
                      <p class="text-muted">Bet History</p>
                    </div>

                    <div class="tab-pane fade @if(request('option') === "inbox")active show @endif" id="tabs-inbox" role="tabpanel" aria-labelledby="tabs-inbox-tab">
                      <p class="text-muted">Inbox</p>
                    </div>

                    <div class="tab-pane fade @if(request('option') === "change-password")active  show @endif" id="tabs-change-password" role="tabpanel" aria-labelledby="tabs-change-password-tab">
                      <p class="text-muted">Change Password</p>
                      <div>
                        <form role="form" method="POST" action="{{ route('changePassword') }}">
                          @csrf 
                          <div class="form-group mb-3">
                            <label for="">Old Password</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword"  required  autofocus>
                            </div>
                              @error('oldpassword')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="form-group focused">
                            <label for="">New Password</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input class="form-control @error('password') is-invalid @enderror" name="password" required type="password">
                            </div>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                          
                          <div class="form-group focused">
                            <label for="">Confirm New Password</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required type="password">
                            </div>
                              @error('password_confirmation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary-naija-vegas my-4">Change Password</button>
                          </div>
                        </form>
                      </div>
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
