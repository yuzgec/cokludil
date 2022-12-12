@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/title.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="{{ route('home') }}">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="#">{{__('site.urunkategorileri')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="portfolio-area pb-50">
        <div class="pswp-gallery" id="gallery">
            <div class="container mt-50">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pswp-gallery__item">
                            <a
                                href="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'img')}}"
                                data-pswp-width="900"
                                data-pswp-height="600"
                                target="_blank">
                                <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'img')}}" alt="">
                            </a>
                        </div>
                    </div>
                    @foreach($Detay->getMedia('gallery') as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="pswp-gallery__item">
                            <a
                                href="{{ $item->getUrl('img') }}"
                                data-pswp-width="900"
                                data-pswp-height="600"
                                target="_blank">
                                <img src="{{ $item->getUrl('thumb') }}" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-area">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 contact-v2 contact-v3 " style="border-radius: 5px;">
                        <div class="cerceve " style="padding: 10px;margin: 10px">
                            <div class="bixol-title-area">
                                <span class="bixol-subtitle">{{__('site.form_bilgial')}}</span>
                            </div>
                            <div class="contact-v2-right">
                                <form action="#" >
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="fname">
                                                <input type="text" placeholder="{{__('site.form_adsoyad')}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="phone-number">
                                                <input type="tel" placeholder="{{__('site.form_telefon')}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="phone-number">
                                                <input type="email" placeholder="{{__('site.form_email')}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="message-field">
                                                <textarea placeholder="{{__('site.form_mesaj')}}" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-btn">
                                        <button type="submit"><i class="fas fa-check-circle"></i>{{__('site.form_submit')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="cerceve " style="padding: 10px;margin: 10px">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active"
                                            id="nav-home-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#genel"
                                            type="button"
                                            role="tab"
                                            aria-controls="nav-home"
                                            aria-selected="true">
                                            <div class="bixol-title-area">
                                                <span class="bixol-subtitle">{{ __('siite.genel') }}</span>
                                            </div>
                                    </button>
                                    <button
                                        class="nav-link"
                                        id="nav-profile-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#teknik"
                                        type="button"
                                        role="tab"
                                        aria-controls="nav-profile"
                                        aria-selected="false">
                                        <div class="bixol-title-area">
                                            <span class="bixol-subtitle">{{ __('siite.teknikozellikler') }}</span>
                                        </div>
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="genel" role="tabpanel" aria-labelledby="nav-home-tab">
                                    {!! $Detay->desc !!}
                                </div>
                                <div class="tab-pane fade" id="teknik" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    {!! $Detay->technical !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h4-blog-area">
        <div class="container">
            <div class="row mt-30">
                <div class="col-lg-6 offset-lg-3">
                    <div class="bixol-title-area text-center">
                        <h3>{{ __('site.digermakina') }}</h3>
                    </div>
                </div>
            </div>
            <div class="h4-blogs">
                <div class="row">
                    @foreach($Product->where('category', 1)->whereNotIn('id', $Detay->id) as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="h4-blog-column">
                                <div class="thumb-wrapper">
                                    <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                        <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page')}}">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="h6-headline">
                                        <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                            <h4>{{ $item->title }}</h4>
                                        </a>
                                    </div>
                                    {{ __('site.firma') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
@section('customCSS')
    <link rel="stylesheet" href="{{ url('/frontend/css') }}/photoswipe.css">
    <style>
        .pswp-gallery__item {
            margin: 0 10px 10px 0;
        }
    </style>
@endsection

@section('customJS')
    <script type="module">
        import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5.3.0/dist/photoswipe-lightbox.esm.js';
        import PhotoSwipeDynamicCaption from '{{ url('/frontend/js') }}/photoswipe-dynamic-caption-plugin.esm.min.js';

        const smallScreenPadding = {
            top: 0, bottom: 0, left: 0, right: 0
        };
        const largeScreenPadding = {
            top: 30, bottom: 30, left: 0, right: 0
        };
        const lightbox = new PhotoSwipeLightbox({
            gallerySelector: '#gallery',
            childSelector: '.pswp-gallery__item',

            // optionaly adjust viewport
            paddingFn: (viewportSize) => {
                return viewportSize.x < 700 ? smallScreenPadding : largeScreenPadding
            },
            pswpModule: () => import('https://cdn.jsdelivr.net/npm/photoswipe@5.3.0/dist/photoswipe.esm.js')
        });

        const captionPlugin = new PhotoSwipeDynamicCaption(lightbox, {
            mobileLayoutBreakpoint: 700,
            type: 'auto',
            mobileCaptionOverlapRatio: 1
        });

        lightbox.init();
    </script>
@endsection
