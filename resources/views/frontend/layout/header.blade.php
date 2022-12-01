<header class="bixol-header header-style-5">
    <div class="info-top sticky-info">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="info-left">
                        <p>Ermaksan <span> {{ __('site.firmaadi') }}</span></p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="info-right">
                        <div class="phone-call">
                            <span><i class="flaticon-telephone"></i>{{ __('site.telefon') }}: <strong>{{ config('settings.telefon1') }}</strong></span>
                        </div>
                        <div class="mail-info">
                            <span><i class="fas fa-envelope"></i>{{ __('site.email') }}: <strong> {{ config('settings.email1') }}</strong></span>
                        </div>
                        <div class="info-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $localeCode }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navigation header-style-2 header-style-3 mt-3 mb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo-wrapper">
                        <a href="{{ route('home') }}">
                            <img src="/logo.jpg" alt="Ermeksan" style="width: 200px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 desktop-menu-wrapper">
                    <div class="desktop-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">{{ __('site.anasayfa') }}</a></li>
                            <li class="has-submenu"><a href="#">{{ __('site.kurumsal') }}</a>
                                <ul>
                                    @foreach($Pages->where('category', 1) as $item)
                                    <li><a href="{{ route('corporatedetail',$item->slug) }}">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @foreach($ProductCategory as $row)
                            <li class="has-submenu"><a href="{{ route('categorydetail',$row->slug) }}">{{ $row->title }}</a>
                                <ul>
                                    @foreach($Product->where('category', $row->id) as $item)
                                            @php $slug = ($row->id == 1) ?  'productdetail' : 'partdetail' @endphp
                                        <li>
                                            <a href="{{ route($slug, $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach

                            <li><a href="/yeni/sayfa?ad=İnsan Kaynakları">Blog</a></li>
                            <li><a href="{{ route('reference' ) }}">{{ __('site.referanslar') }} </a></li>

                            <li><a href="{{ route('gallery') }}">{{ __('site.galeri') }}</a></li>
                            <li><a href="{{ route('contactus') }}">{{ __('site.iletisim') }}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="header-right">
                        <div class="header-btn">
                            <a href="iletisim" class="home5-primary-btn">{{ __('site.teklifiste') }}<span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                        </div>
                        <div class="bixol-mobile-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="bixol-mobile-menu">
    <a href="{{ route('home') }}" class="mobile-menu-logo">
        <img src="/logo.jpg" alt="Ermeksan" style="width: 150px">
    </a>
    <ul>
        <li><a href="{{ route('home') }}">{{ __('site.anasayfa') }}</a></li>
        <li class="has-submenu"><a href="#">{{ __('site.kurumsal') }}</a>
            <ul>
                <li><a href="/yeni/sayfa?ad=Hakkımızda">Hakkımızda</a></li>
                <li><a href="/yeni/sayfa?ad=Vizyon">Vizyon</a></li>
                <li><a href="/yeni/sayfa?ad=Misyon">Misyon</a></li>
                <li><a href="/yeni/sayfa?ad=Üretim">Üretim</a></li>
                <li><a href="/yeni/sayfa?ad=İnsan Kaynakları">İ.K.</a></li>
            </ul>
        </li>
        <li class="has-submenu"><a href="#">Makineler</a>
            <ul>
                <li><a href="/yeni/urun?ad=Dolaplar">Dolaplar</a></li>
                <li><a href="/yeni/urun?ad=Pervaneler">Pervaneler</a></li>
                <li><a href="/yeni/urun?ad=Mikser">Mikser</a></li>
                <li><a href="/yeni/urun?ad=Tav Dolabı">Tav Dolabı</a></li>
                <li><a href="/yeni/urun?ad=Denem Dolabı">Deneme Dolabı</a></li>
            </ul>
        </li>
        <li><a href="#">Yedek Parça</a></li>
        <li><a href="/yeni/sayfa?ad=Referanslar">Referanslar </a></li>
        <li><a href="/yeni/sayfa?ad=İnsan Kaynakları">İ.K. </a></li>
        <li><a href="/yeni/iletisim">{{ __('site.firmaadi') }} </a></li>
    </ul>
</div>
