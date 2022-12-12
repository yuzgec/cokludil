@extends('frontend.layout.app')
@section('content')
    <div class="bixol-breadcrumb" data-background="/title.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{__('site.referanslar')}}</h1>
                <a href="{{ route('home') }}">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="#">{{__('site.kurumsal')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{__('site.referanslar')}}</span>
            </div>
        </div>
    </div>


    <div class="bixol-case-study mt-50 pb-50">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="bixol-ct-left" data-background="/frontend/images/map-bg.png">
                        <span class="ct-title">32<sup>+</sup></span>
                        <span class="ct-subtitle">Dünya Genelinde 32 Ülkeye İhracat</span>
                    </div>
                </div>
            </div>

            <div class="row">
                @for($i = 1; $i < 33 ; $i++)
                    <div class="col-md-2 col-sm-4 p-2 grid-item">
                        <div class="bixol-pt-item">
                            <img src="/frontend/images/marka/{{$i}}.jpg" alt="Deri Makinaları İmalatı">
                        </div>
                    </div>
                @endfor
            </div>

        </div>
    </section>
@endsection
