@extends('layout')

    @section('title', "CLUB OTAKU de l'ESGIS - Contact")

@section('container')
   <header class="contact_header">
    <h1 >Contactez-nous</h1>
    <p class="white">A la recherche d'une crew otaku? La cavalerie est là !</p>
   </header>
   <section class="formulaire">
        <div class="incite">
            <h2>Remplissez ce formulaire pour plus de renseignements ou pour nous rejoindre.</h2>
            <p>Ikusso ! Toujours plus ultraa !!</p>
            <img src="{{asset('assets/images/contact/mha.png')}}" alt="">
        </div>
        <div class="fill">
            <img src="{{asset('assets/images/contact/hawks.png')}}" alt="">
            <form class="fill-form" method="post" action="">
                <div class="fill_name">
                  <label for="nom">votre nom <input id="nom" name="nom" type="text" placeholder="EX: CHAMPAGNE"></label>
                  <label for="prenom">votre prénom <input name="prenom" id="prenom" type="text" placeholder="EX: Jason"></label>
                </div>
                <label for="email">votre email <input id="email" name="email" type="email" placeholder="EX: exemple@gmail.com"></label>
                <label for="tel">votre numéro de téléphone
                    <div class="fill_contact">
                    <select name="" id="">
                      <option value="+229">Benin</option>
                      <option value="+228">Togo</option>
                      <option value="+234">Nigeria</option>
                    </select>
                    <input type="number" name="tel" id="tel" placeholder="01 XXX-XXX">
                 </div>
                </label>
                <textarea placeholder="Laisser votre message..." name="message" id="message" ></textarea>
                <input class="submit" type="submit" value="Envoyer">
            </form>
            <img class="fill_end" src="{{asset('assets/images/contact/frog.png')}}" alt="">
        </div>
   </section>

@endsection
