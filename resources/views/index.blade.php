@extends('layouts.app')


@section('content')
<div class="wrapper">
  <div class="section section-heroine section-shaped py-0 carousel-section">
    <div class="container">
      <div class="row my-2 position-relative">
        <div id="mainCarousel" class="main-carousel carousel slide w-100 col" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" style="">

                <img class="d-md-block d-none" src="{{ asset('img/banner/nv-banner-dt.jpg') }}" />
                <img  class="d-md-none d-block" src="{{ asset('img/banner/nv-banner-m.jpg') }}" />
                <div class="carousel-caption">
                </div>
              </div>

              <div class="carousel-item " style="">
                <img class="d-md-block d-none" src="{{ asset('img/banner/WB-d.png') }}" />
                <img  class="d-md-none d-block" src="{{ asset('img/banner/WB-m.png') }}" />
                <div class="carousel-caption">
                </div>
              </div>
              <div class="carousel-item " style="">
                <img class="d-md-block d-none" src="{{ asset('img/banner/nv-banner-dt.jpg') }}" />
                <img  class="d-md-none d-block" src="{{ asset('img/banner/nv-banner-m.jpg') }}" />
                <div class="carousel-caption">
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" style="opacity: 0.1"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true" style="opacity: 0.1"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="w-100">
          <div class="responsibly-tag position-absolute">
            <div>
              <h4 class="text-white"><span class="badge badge-pill badge-dark text-uppercase"><small><span class="badge badge-pill badge-warning">18+</span> Bet Responsibly</small></span></h4>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>

    

    <section class="section trending-bet-section section-shaped py-0">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="px-2 shadow-sm bg-naija-vegas-green-02 position-relative"  style="padding-top:3px;padding-bottom:3px; border-left: 4px solid #000;">
                <h5 class="my-1">
                  
                  <span class="font-weight-bold text-white">Trending Bets</span>
                </h5>
                <button type="button" class="btn btn-outline-light btn-round position-absolute btn-sm" style="top:50%; transform:translateY(-50%); right:10px;">See more</button>
              </div>
            </div>
          </div>

          <div class="row trending-bet-list my-3">
            <div class="col-md-4 trending-bet-item">
              <div class="shadow-sm">
                <div class="image-wrapper" style="background-image: url('https://psmag.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTU3ODk2MjI5MjUzMDMxMjQx/gettyimages-1020986360.jpg');"> 
                </div>
                <div class="text-wrapper">
                  <h6 class="h6 font-weight-bold borderRightLeft">Trump Re-election</h6>
                  <span class="badge badge-pill badge-default text-uppercase  mb-2">US Election</span>
                  <br/>
                  <button type="button" class="btn btn-secondary-naija-vegas btn-block btn-sm pt-2">Bet Now</button>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 trending-bet-item">
              <div class="shadow-sm">
                <div class="image-wrapper" style="background-image: url('https://psmag.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTU3ODk2MjI5MjUzMDMxMjQx/gettyimages-1020986360.jpg');"> 
                </div>
                <div class="text-wrapper">
                  <h6 class="h6 font-weight-bold borderRightLeft">Trump Re-election</h6>
                  <span class="badge badge-pill badge-default text-uppercase  mb-2">US Election</span>
                  <br/>
                  <button type="button" class="btn btn-secondary-naija-vegas btn-block btn-sm pt-2">Bet Now</button>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 trending-bet-item">
              <div class="shadow-sm">
                <div class="image-wrapper" style="background-image: url({{ asset('img/banner/edo-election.jpg') }});"> 
                </div>
                <div class="text-wrapper"> 
                  <h6 class="h6 font-weight-bold borderRightLeft">Edo Gubernatorial</h6>
                  <span class="badge badge-pill badge-primary text-uppercase  mb-2 ">Edo Election</span>
                  <br/>
                  <button type="button" class="btn btn-secondary-naija-vegas btn-block btn-sm pt-2">Bet Now</button>
                </div>
              </div>
            </div>
          </div>
          
        </div>
    </section>
    
    <section class="section section-components  bg-secondary ">
      <div class="">
          <div class="container ">
            <div class="row">
              <div class="col">
                <div class="px-2 shadow-sm bg-naija-vegas-green-02 position-relative"  style="padding-top:3px;padding-bottom:3px; border-left: 4px solid #000;">
                  <h5 class="my-1">
                    <span class="font-weight-bold text-white">Betting News</span>
                  </h5>
                </div>
                <div class="mb-3">
                  <small class="text-uppercase font-weight-bold">Updates and Tips</small>
                </div>
              </div>
            </div>              
              <div class="row">
                  <div class="col-md-4">
                      <div class="news-container card mb-2">
                          <div class="news-image">
                              <img class="img-fluid" src="https://picsum.photos/400/300" alt="news-Img">
                          </div>
                          <div class="news-content p-2">
                              <p class="lead mb-0 mt-0 font-weight-bold">Betting 101
                              </p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="news-container card mb-2">
                          <div class="news-image">
                              <img class="img-fluid" src="https://picsum.photos/400/300" alt="news-Img">
                          </div>
                          <div class="news-content p-2">
                              <p class="lead mb-0 mt-0 font-weight-bold">Betting 101</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="news-container card mb-2">
                          <div class="news-image">
                              <img class="img-fluid" src="https://picsum.photos/400/300" alt="news-Img">
                          </div>
                          <div class="news-content p-2">
                              <p class="lead mb-0 mt-0 font-weight-bold">Betting 101</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="mt-3">
                  <button class="btn btn-transparent text-uppercase font-weight-bold">See More <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                  </button>
              </div>
          </div>
      </div>
  </section>
    <section class="customer-service-section section section-lg">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="d-flex h-100 align-items-center">
                      <div class="mb-3">
                          <h2 class="mb-5"><span>Bookmaker Support</span></h2>
                          <div class="">
                              <div class="d-block d-md-none">
                                  <img class="img-fluid rounded-circle shadow-lg" src="{{ asset('img/banner/customer-service-banner.jpg') }}" alt="customer support Img">
                              </div>
                          </div>
                          <div class="mt-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              <div class="mt-3">
                                  <button class="btn btn-primary-naija-vegas text-uppercase font-weight-bold">Help <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M235.4 176c0-11.4 9.3-19.9 20.5-19.9 11.4 0 20.7 8.5 20.7 19.9s-9.3 20-20.7 20c-11.2.1-20.5-8.6-20.5-20zm1.4 35.8H275v144.1h-38.2V211.8z"></path></svg></button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="">
                      <div class="d-none d-md-block">
                          <img class="img-fluid rounded-circle shadow-lg" src="{{ asset('img/banner/customer-service-banner.jpg') }}" alt="customer support Img">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

</div>
@endsection
