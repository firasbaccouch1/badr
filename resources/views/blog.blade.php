@extends('MasterPage')
@section('content')
  <div class="st-content">
    <div class="st-page-heading st-dynamic-bg" data-src="{{ asset($data['slid_img']) }}"  style="{{ "background-image: url('".asset($data['slid_img'])."')"}}">
      <div class="container">
        <div class="st-page-heading-in text-center">
          <h1 class="st-page-heading-title">{{ $data['slid_title'] }}</h1>
        </div>
      </div>
    </div><!-- .st-page-heading -->
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-md-1">
          <div class="st-post-details st-style1">
            <h2>{{ $data['title'] }}</h2>
            @if ($data['img1'])
            <img class="st-zoom-in" style="width: 100%" src="{{ asset($data['img1']) }}" alt="blog1">
            @endif
            <p>{!! $data['desc1'] !!}</p>
            @if ($data['img2'])
            <img class="st-zoom-in" style="width: 100%" src="{{ asset($data['img2']) }}" alt="blog1">
            @endif
            <p>{!! $data['desc2'] !!}</p>

          </div>
          <div class="st-height-b60 st-height-lg-b60"></div>

        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </div>
@endsection
