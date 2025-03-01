@extends('layout')

@section('title', "Activités du Club Otaku de l'ESGIS")

@section('container')
    <div class="image_container">
       <img src="{{asset('assets/images/activite/hero.jpeg')}}"  class="hero_image" alt="">
    </div>
    <header class="header">
        <h1 class="wide_font white hero_text">Nos projets & Actalités </h1>
        <div class="container_card">
            <a href="">
                <div class="page_card">
                    <img src="{{ asset('assets/images/activite/atelier.jpeg')}}" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h3>Ateliers et formations</h3>
                </div>
            </a>
             <a href="">
                <div class="page_card">
                    <img src="{{asset('assets/images/activite/Evènements.jpeg')}}" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                    </svg>
                    <h3>Events & projets</h3>
                </div>
             </a>
              <a href="">
                <div class="page_card">
                    <img src="{{asset('assets/images/activite/actu.jpeg')}}" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                    </svg>
                    <h3>Actualités</h3>
                </div>
              </a>
        </div>
    </header>
    <main>
        <section class="activite">
             <div style="background-color:#E3E0E0;text-align:center;">
                <h1 class="wide_font gradient">ATELIERS ET FORMATIONS</h1>
             </div>
             <div class="container_activity">
                <div class="contain1">
                    <div class="activity">
                        <h4>Japan Learning</h4>
                        <img style="object-position:center -4vw;" src="{{asset('assets/images/activite/japanLearning.png')}}" alt="">
                        <p>Découvrez et apprenez les bases de la langue japonaise.</p>
                        <a href="" ><p>En savoir plus</p></a>
                    </div>
                    <div class="activity">
                        <h4>Karaoke</h4>
                        <img src="{{asset('assets/images/activite/karaoke.png')}}" alt="">
                        <p>Déployez vos plus belles voix et déchaînez vous sur le micro</p>
                        <a href="" ><p>En savoir plus</p></a>
                    </div>
                    <div class="activity">
                        <h4>Tribunal</h4>
                        <img src="{{asset('assets/images/activite/tribunal.png')}}" alt="">
                        <p>Participez à un clash d’opinions en défendant votre thèse.</p>
                        <a href="" ><p>En savoir plus</p></a>
                    </div>
                </div>
                <div class="contain2">
                    <div class="activity">
                        <h4>Doublage</h4>
                        <img src="{{asset('assets/images/activite/doublage.png')}}" alt="">
                        <p>Incarnez et devenez un personnage de vos animes préférés</p>
                        <a href="" ><p>En savoir plus</p></a>
                    </div>
                    <div class="activity">
                        <h4>Dessin</h4>
                        <img style="object-position:center -4vw;" src=" {{asset('assets/images/activite/dessin.png')}} " alt="">
                        <p>Apprenez les bases du dessin et étendez les horizons de vos pensées.</p>
                        <a href="" ><p>En savoir plus</p></a>
                    </div>
                    <div class="activity">
                        <h4>StoryTelling</h4>
                        <img src=" {{asset('assets/images/activite/storytelling.png')}} " alt="">
                        <p>Apprenez les bases d’un scénario
                            proprement écrit</p>
                        <a href="" ><p>En savoir plus</p></a>
                    </div>
                </div>
             </div>
             <p class="other white">ET ENCORE BIEN D'AUTRES ACTIVITES INEDITES... </p>
        </section>
        <section class="event">
            <div style="background-color:#E3E0E0;text-align:center;">
                <h1 style="padding:10px;color:rgb(34, 34, 34);" class="wide_font">Nos Evènements Réalisés</h1>
             </div>
             <div class="EventRealise">
               <div class="item1"></div>
               <div class="item2"></div>
               <div class="item3"></div>
               <div class="item4"></div>
             </div>
             <h2 class="loadTitle white">Evènements en cours</h2>
             <div class="event_container">
                <div class="loading event1"></div>
                <div class="loading event2"></div>
             </div>
        </section>
        <section class="actu">
              <h2 style="align-items: center;" class="actuTitle white" >Actualités</h2>
        </section>
    </main>

@endsection
