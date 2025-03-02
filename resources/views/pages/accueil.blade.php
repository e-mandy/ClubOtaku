@extends('layout')

@section('title', "CLUB OTAKU D'ESGIS - Accueil")

@section('container')
    <section class="salutations">
    <div class="container">
        <div class="text-content">
            <h1><span><i class="fa-solid fa-yin-yang"></i> HAIYO GOSAIMASU</span><span>MINA SAN</span></h1>
            <p>Bienvenue au club Otaku d'Esgis</p>
            <div class="button-action">
                <a class="more" href="{{ route('activite') }}">Voir plus</a>
                <a class="contact-link" href="{{ route('contact') }}">Contactez - nous</a>
            </div>
        </div>
        <div class="image-content"></div>
    </div>
    </section>
    <section class="graph-present">
        <div class="graph-container">
            <div class="back-graph">
                <div class="back-row">
                    <div class="back img1"></div>
                    <div class="back img2"></div>
                </div>
                <div class="back-row">
                    <div class="back img3"></div>
                    <div class="back img4"></div>
                </div>
                <div class="back-row">
                    <div class="back img5"></div>
                    <div class="back img6"></div>
                </div>
            </div>
            <!--<h1 class="slogan">WATASHI NO SOUL SOCIETY</h1>-->
            <div class="front-graph">
                <div class="front-row">
                    <div class="front img1"></div>
                    <div class="front img2"></div>
                    <div class="front img3"></div>
                </div>
                <div class="front-row">
                    <div class="front img4"></div>
                    <div class="front img5"></div>
                    <div class="front img6"></div>
                </div>
                <div class="front-row">
                    <div class="front img7"></div>
                    <div class="front img8"></div>
                    <div class="front img9"></div>
                </div>
                <div class="front-row">
                    <div class="front img10"></div>
                    <div class="front img11"></div>
                    <div class="front img12"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="carou-present">
        <div class="carou-container">
            <div class="titre-activite">
                <h3>QUI SOMMES - NOUS ?</h1>
                <h1>DECOUVREZ NOS ACTIVITES</h1>
            </div>
            <div class="carou-main">
                <div class="carou-contents">
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img13.jpeg')}}" alt="">
                    </div>
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img14.jpeg')}}" alt="">
                    </div>
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img15.jpeg')}}" alt="">
                    </div>
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img16.jpeg')}}" alt="">
                    </div>
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img17.jpeg')}}" alt="">
                    </div>
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img18.jpeg')}}" alt="">
                    </div>
                    <div class="carou-content">
                        <img src="{{asset('assets/images/accueil/img18.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="carou-button left"></div>
                <div class="carou-button right"></div>
            </div>
            <div class="carou-action">
                <a href="{{ route('activite') }}"class="carou-button-action">En savoir plus</a>
                <p>Vous souhaitez en voir plus ? Visitez notre page d’activités en cliquant sur le bouton ci-dessus.</p>
            </div>
        </div>
    </section>
@endsection
