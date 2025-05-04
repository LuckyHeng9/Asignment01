@extends('layouts.app')

@section('content')
<section class="py-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Services</h2>
                <p class="text-secondary mb-5 text-center">We are dedicated to delivering exceptional services that drive success and transform your business. With a commitment to excellence, we take pride in offering a comprehensive range of services.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gy-5 gx-md-4 gy-lg-0 gx-xxl-5 justify-content-center">
            @foreach($features as $feature)
            <div class="col-11 col-sm-6 col-lg-3">
                <div class="badge bg-primary p-3 mb-4">
                  <img src="{{ asset('storage/' . $feature->image_path) }}" class="img-thumbnail mb-2" style="width: 100px;">
                </div>
                <h4 class="mb-3">{{ $feature->title }}</h4>
                <p class="mb-3 text-secondary">{{ $feature->description }}</p>
                <a href="#!" class="fw-bold text-decoration-none link-primary">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
