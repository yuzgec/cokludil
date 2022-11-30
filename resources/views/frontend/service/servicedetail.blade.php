@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="/dinamik">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="/dinamik">Hizmetlerimiz <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="service-details pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sr-sidebar">

                        @foreach($ServiceCategory as $item)
                        <div class="sidebar-widget sr-list-widget">
                            <div class="widget-title">
                                <h5>{{ $item->title }}</h5>
                            </div>
                            <div class="list-nav">
                                <ul>
                                    @foreach($item->getService as $row)
                                        <li>
                                            <a href="{{ route(service($item->id), $row->slug) }}" title="{{ $row->title }}" class="{{ ($row->slug == $Detay->slug) ? 'active' : null}}">
                                                {{ $row->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <div class="sidebar-widget sr-list-widget">
                            <div class="widget-title">
                                <h5>Kurumsal</h5>
                            </div>
                            <div class="list-nav">
                                <ul>
                                    @foreach($Pages as $item)
                                        <li>
                                            <a href="{{ route('corporatedetail',$item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sr-details-content">


                        <div class="title-txt">
                            <h3>{{ $Detay->title }}</h3>
                        </div>
                        <div class="pera-text">
                            {!! $Detay->desc !!}
                        </div>

                        <div class="get-in-touch mb-30 mt-30">

                                <div class="git-content" data-background="/frontend/images/home6/git-bg.jpg" style="background-image: url(&quot;/frontend/images/home6/git-bg.jpg&quot;);">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="git-left">
                                                <p class="text-white text-center">www.dinamiksms.com TC. Bilgi Teknolojileri ve İletişim Kurumu (BTK) dan işletmeci yetkilendirmesine
                                                    sahip <br>DİNAMİK TELEKOMÜNİKASYON BİLİŞİM SİSTEMLERİ SANAYİ VE TİCARET LTD.ŞTİ ad ve hesabına sunulmaktadır.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="srv2-service-section row  pb-30">
                        @foreach($Features as $item)
                        <div class="col-lg-4 col-sm-6">
                                    <div class="srv2-item">

                                        <div class="srv2-service-content">
                                            <h5>{{ $item->title }}</h5>
                                            {!! $item->desc !!}
                                        </div>
                                        <div class="srv2-hover-item" data-background="/frontend/images/services/01.jpg">

                                            <div class="srv2-service-content">
                                                <h5>{{ $item->title }}</h5>
                                                {!! $item->desc !!}
                                                <a href="#" class="srv2-readmore-btn">İncele<i class="fas fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endsection
