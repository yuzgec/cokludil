@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <span class="breadcrumb-object">
            <img src="/frontend/images/blog/email-icon.png" alt="{{ config('app.name') }}">
        </span>

        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="/dinamik">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="/dinamik">{{__('site.urunkategorileri')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>


    <section class="h4-blog-area pt-30 pb-50">
        <div class="container">
            <div class="h4-blogs">
                <div class="row">
                    @foreach($Product as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="h4-blog-column">
                            <div class="thumb-wrapper">
                                <a href="blog-details.html">
                                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page')}}">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="h6-headline">
                                    <a href="blog-details.html">
                                        <h4>{{ $item->title }}</h4>
                                    </a>
                                </div>
                                {{ $Detay->title }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@endsection
