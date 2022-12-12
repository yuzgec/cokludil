@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <section class="h4-about-section pt-50 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-left">
                        <div class="title-style-2">
                            <h3>{{__('site.firma')}}</h3>
                            {!! $Hakkimizda->desc !!}
                        </div>

                        <div class="about-bottom">
                            <div class="about-list">
                                <ul>
                                    <li><span><i class="fas fa-check"></i></span>Yüksek ürün kalitesi ile sağlam makine</li>
                                    <li><span><i class="fas fa-check"></i></span>Dünya'nın bir çok noktasına tedarik</li>
                                    <li><span><i class="fas fa-check"></i></span>Uzman ekip ve profesyonel üretim</li>
                                </ul>
                            </div>
                            <div class="about-yr-ex">
                                <span class="icon-wrapper"><i class="flaticon flaticon-trophy"></i></span>
                                <span class="title">{{ date('Y') - 1989 }}</span>
                                <span class="subtitle">{{__('site.deneyim')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-right">
                        <div class="img-wrapper">
                            <img src="{{ (!$Hakkimizda->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Hakkimizda->getFirstMediaUrl('page', 'thumb') }}" alt="">
                            <div class="ab-right-content">
                                <div class="dark-bg">
                                    <span class="title">600+</span>
                                    <span class="subtitle">{{__('site.musteri')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="home5-git-area mt-200 pt-40 pb-40" data-background="https://www.ermaksan.net/img/title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="git-content">
                        <span class="title">{{ __('site.katalog2') }}</span>
                        <p>{{ __('site.katalog3') }}</p>
                        <a href="{{ route('contactus') }}" class="home5-primary-btn">{{ __('site.iletisimegec') }}<span><i class="flaticon flaticon-arrow"></i></span></a>
                        <a href="/kat.pdf" class="home5-primary-btn">{{ __('site.katalog') }} <span><i class="flaticon flaticon-arrow"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="h4-blog-area pt-30 pb-50">
        <div class="container">
            <div class="h4-blogs">
                <div class="row">
                    @foreach($Product->where('category', 1) as $item)
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

    <section class="home5-portfolio-area pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="title-style-3">
                        <span class="bixol-subtitle">{{ __('site.firma') }}</span>
                        <h3 class="text-uppercase">{{ __('site.urunkategorileri') }}</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bf-desc">
                        <p>{{ __('site.urunust') }}</p>
                    </div>
                </div>
            </div>
            <div class="home5-portfolio-slider">

                @foreach($ProductCategory as $item)
                <div class="portfolio-single">
                    <div class="img-wrapper">
                        <img src="assets/images/home5/pf-1.jpg" alt="">
                        <div class="overlay">
                            <a href="{{ route('categorydetail',$item->slug) }}" title="{{ $item->title }}">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>

                    <div class="portfolio-bottom">
                        <div class="h4-headline">
                            <a href="{{ route('categorydetail',$item->slug) }}" title="{{ $item->title }}">
                                <h5>{{ $item->title }}</h5>
                            </a>
                        </div>
                        <div class="subtitle">
                            <span>Ermaksan</span>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('categorydetail',$item->slug) }}" title="{{ $item->title }}">
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>{{ __('site.incele') }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="bixol-case-study mt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="bixol-ct-left" data-background="/frontend/images/map-bg.png">
                        <span class="ct-title">32<sup>+</sup></span>
                        <span class="ct-subtitle">Dünya Genelinde 32 Ülkeye İhracat</span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bixol-ct-right">
                        <div class="row">
                            @for($i = 1; $i < 19 ; $i++)
                            <div class="col-md-2 col-sm-4 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/marka/{{$i}}.jpg" alt="Deri Makinaları İmalatı">
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="h5-blog-area pt-100 pb-60">
        <div class="container">
            <div class="h5-blog-top">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="title-style-3">
                            <span class="bixol-subtitle">Ermaksan Deri Makinaları</span>
                            <h3>HABERLER - DUYURULAR</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bf-desc">
                            <p>Firmamıza ve dericilik sektörüne dair güncel haberleri bu alandan takip edebilirsiniz.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h5-blog-slider">
                <div class="h5-blog-single">
                    <div class="thumb-wrapper">
                        <a href="/"><img src="assets/images/home5/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="h4-headline">
                            <a href="/"><h4>Haber1 Başlığı Buraya Gelecek</h4></a>
                        </div>
                        <span class="seperator"></span>
                        <div class="h4-pera-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="/">Devamını Oku <span><i class="fas fa-plus"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="h5-blog-single">
                    <div class="thumb-wrapper">
                        <a href="/"><img src="assets/images/home5/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="h4-headline">
                            <a href="/"><h4>Haber2 Başlığı Buraya Gelecek</h4></a>
                        </div>
                        <span class="seperator"></span>
                        <div class="h4-pera-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="/">Devamını Oku <span><i class="fas fa-plus"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="h5-blog-single">
                    <div class="thumb-wrapper">
                        <a href="/"><img src="assets/images/home5/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="h4-headline">
                            <a href="/"><h4>Haber3 Başlığı Buraya Gelecek</h4></a>
                        </div>
                        <span class="seperator"></span>
                        <div class="h4-pera-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="/">Devamını Oku <span><i class="fas fa-plus"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="h5-blog-single">
                    <div class="thumb-wrapper">
                        <a href="/"><img src="assets/images/home5/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="h4-headline">
                            <a href="/"><h4>Haber4 Başlığı Buraya Gelecek</h4></a>
                        </div>
                        <span class="seperator"></span>
                        <div class="h4-pera-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="/">Devamını Oku <span><i class="fas fa-plus"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="bixol-footer-top">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25000.69093265766!2d27.271892!3d38.439474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x547ffe8398558270!2sErmaksan%20Deri%20Makinalar%C4%B1!5e0!3m2!1str!2str!4v1667954777397!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection

@section('customJS')
    <script>
        var	tpj = jQuery;
        if(window.RS_MODULES === undefined) window.RS_MODULES = {};
        if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider51"] = {init:function() {
                window.revapi5 = window.revapi5===undefined || window.revapi5===null || window.revapi5.length===0  ? document.getElementById("rev_slider_5_1") : window.revapi5;
                if(window.revapi5 === null || window.revapi5 === undefined || window.revapi5.length==0) { window.revapi5initTry = window.revapi5initTry ===undefined ? 0 : window.revapi5initTry+1; if (window.revapi5initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider51"].init()}); return;}
                window.revapi5 = jQuery(window.revapi5);
                if(window.revapi5.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_5_1"); return;}
                revapi5.revolutionInit({
                    revapi:"revapi5",
                    sliderLayout:"fullwidth",
                    visibilityLevels:"1240,1024,778,480",
                    gridwidth:"1230,1200,778,480",
                    gridheight:"585,585,500,480",
                    spinner:"spinner0",
                    perspective:600,
                    perspectiveType:"global",
                    keepBPHeight:true,
                    editorheight:"585,585,500,480",
                    responsiveLevels:"1240,1024,778,480",
                    progressBar:{disableProgressBar:true},
                    navigation: {
                        onHoverStop:false,
                        bullets: {
                            enable:true,
                            tmp:"",
                            style:"bixol-bullet-round-two",
                            hide_onleave:true,
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0,
                            direction:"vertical",
                            space:15
                        }
                    },
                    viewPort: {
                        global:false,
                        globalDist:"-200px",
                        enable:false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid:true
                    },
                });

            }}
        if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
    </script>

@endsection
