@extends('layouts.app', ['class' => 'bg-primary'])
@section('content')
	@include('Guest.header')
<!--Section: Contact v.2-->

<div class="container">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Nous Contacter</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? S'il vous plaît n'hésitez pas à nous contacter directement. </p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Nom et Prénom</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Sujet</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-white">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').reset();">Annuler</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Apprt 8 Imm 25 Rue Ouad ziz 3éme étage Agdal Rabat</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>05 37 68 00 48 // 06 01 12 34 50 </p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@it-genious.com</p>
                </li>
            </ul>
        </div> 
        
        <!--Grid column-->
            <div class="col-md-12 my-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.6092761510513!2d-6.848929684842805!3d34.002568480619594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c88ba40ab31%3A0x4ba0905208029a55!2s25%20Rue%20Oued%20Ziz%2C%20Rabat%2010090!5e0!3m2!1sfr!2sma!4v1566620201612!5m2!1sfr!2sma" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
    
    </div>
    @include('Guest.footer')
</div>

<!--Section: Contact v.2-->
@endsection
