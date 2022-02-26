@extends('layouts.frontend.layout')
@section('content')
<section class="page-title overflow-hidden grey-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <h1 class="title mb-0">Product</h1>
        </div>
      </div>
    </div>
</section>

<div class="page-content">
    <section>
        <div class="container">
            <div class="row">
                @forelse ($products as $item)
                    <div class="col-md-4 mt-3 h-100">
                        <img src="{{asset('storage/product/'.$item->file_path)}}" class="img-fluid img-thumbnail" />
                    </div>
                @empty
                    No Product Found !
                @endforelse
                <div class="m-3">
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection