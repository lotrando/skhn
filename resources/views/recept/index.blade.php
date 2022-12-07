@extends('layouts.app')

@section('main')
  <!--Intro Section-->
  <section class="view" id="home"
           style="background-image: url('img/pillshand.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-blue-strong">
      <div class="h-100 d-flex justify-content-center align-items-center container">
        <a class="btn btn-primary btn-rounded font-weight-bold ml-lg-0 wow fadeInLeft"
           data-wow-delay="0.5s" href="{{ route('erecept.create') }}">Rezervovat</a>
        <a class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInRight"
           data-wow-delay="0.5s" href="{{ URL::previous() }}">Zpět
        </a>
      </div>
    </div>
  </section>
@endsection
