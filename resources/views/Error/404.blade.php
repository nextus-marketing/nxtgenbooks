@extends('layouts.frontend')

@section('title')
    404 Not Found | NxtGen Books
@endsection

@section('content')

<!-- Breadcrumb -->
<section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix" data-bg-color="#16243E">
    <div class="breadcrumb__bg" data-background="/frontend/my-img/bredcrum.png"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumb__content">
                    <h3 class="breadcrumb__title">404 Not Found</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__list text-center text-sm-end">
                        <span><a href="/">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span>404 Not Found</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 404 Content -->
<section class="tp-service-area-2 pt-50 pb-50" data-bg-color="#F6F6F9">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tp-service-title-wrapper-2 text-center">

                    <span class="tp-section-title-pre">Oops! Page Not Found</span>

                    <h1 style="font-size:120px; font-weight:700; color:#16243E; line-height:1;">
                        404
                    </h1>

                    <h3 class="tp-section-title mb-20">
                        The page you’re looking for doesn’t exist
                    </h3>

                    <p class="mb-35" style="max-width:600px; margin:0 auto; color:#555;">
                        It looks like the page may have been moved, deleted, or never existed.
                        Don’t worry — let’s get you back on track.
                    </p>

                    <div class="d-flex justify-content-center gap-3 flex-wrap mt-3">
                        <a class="tp-btn" href="/">
                            <i class="fas fa-home" style="margin-right:8px;"></i>
                            Back to Home
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
