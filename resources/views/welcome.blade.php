@extends('layouts.main')

@section('content')
    @include('layouts.partials.hero')
    <section class="how-it-works">
      <div class="container pt-5 pb-5">
        <h2 class="text-center">
          How It Works!
        </h2>
        <div class="row">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1">
              <div class="p-5 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="img/file-icon.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <div class="pl-5 d-flex justify-content-center align-items-center">
                <ul class="how-it-works__steps">
                  <li> Sign up</li>
                  <li> Submit your Document</li>
                  <li> We professionaly edit your paper</li>
                  <li> Recieve your corrected paper and success.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
            <a href="/register" class="btn btn-primary btn-xl rounded-pill mt-5">Sign Up</a>
        </div>
      </div>
    </section>
    
@endsection