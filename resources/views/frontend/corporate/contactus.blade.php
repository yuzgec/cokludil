@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/title.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{__('site.iletisim')}}</h1>
                <a href="{{ route('home') }}">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="#">{{__('site.kurumsal')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{__('site.iletisim')}}</span>
            </div>
        </div>
    </div>

    <section class="contact-v2 pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-v2-left">
                        <div class="contact-v2-list">
                            <div class="row justify-content-center justify-content-lg-start">
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-pin"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>{{ __('site.adres') }}</h5>
                                            <p>{{ config('settings.adres1') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-phone"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>{{ __('site.telefon') }}</h5>
                                            <p>{{ config('settings.telefon1') }}</p>
                                            <p>{{ config('settings.telefon2') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-mail"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>{{ __('site.email') }}</h5>
                                            <p>{{ config('settings.email1') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  mt-3">
                    <div class="contact-v2-right">
                        <p>{{__('site.form_info')}}</p>
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="name-field">
                                        <label for="your-name">{{ __('site.form_adsoyad') }}</label>
                                        <input type="text" id="your-name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mail-field">
                                        <label for="email-address">{{ __('site.form_email') }}</label>
                                        <input type="email" id="email-address" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">{{ __('site.form_telefon') }}</label>
                                        <input type="tel" id="phone-number" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">{{ __('site.form_konu') }}</label>
                                        <input type="text" id="phone-number" >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="message-field">
                                        <label for="message">{{ __('site.form_mesaj') }}</label>
                                        <textarea  rows="9" id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button type="submit"><i class="fas fa-check-circle"></i>{{ __('site.form_submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="bixol-footer-top">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25000.69093265766!2d27.271892!3d38.439474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x547ffe8398558270!2sErmaksan%20Deri%20Makinalar%C4%B1!5e0!3m2!1str!2str!4v1667954777397!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
