@extends('layouts.frontend.layout')
@section('content')

<section class="page-title overflow-hidden grey-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <h1 class="title mb-0">TERMS AND <span>CONDITIONS</span></h1>
        </div>
      </div>
    </div>
</section>


<div class="page-content">
    
  {!! $content->description !!}

</div>

@endsection