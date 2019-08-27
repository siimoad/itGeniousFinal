@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        
                       
                    
                    
                          
                             <div class="short_overview my-4 d-flex p-2 bd-highlight">
                                Nous sommes conscients que l’insertion professionnel des étudiants est un point très important et délicat 
                                La plupart des étudiants galère a trouvé un stage ou PFE afin de valider leur études et cursus de formation 
                                Pire encore, il y’en a d’autres étudiants qui ne dispose pas et qui cherchent de l’accompagnement afin de réaliser cet objectif 
                                IT genious s’engage à aider les jeunes et étudiants et propose une série de stage et de projets fin d’étude dans les différents domaines de l’IT.<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;•	Système et réseau <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;•	Développements Web et mobile<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;•	Programmation et base de données <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;•	Bureautique et conception Graphique<br>
                                Les étudiants travaillent sur des vrais projets techniques, ce qui leur permet à la fin de mettre, non seulement, en pratique les éléments acquis lors de la formation mais aussi de contribuer à la réalisation et la mise en place de vrais projets informatiques, de discuter avec les clients et de vivre une insertion réelle dans le monde des entreprises. 
                                
                             <br>
                             
                            </div>
                        
                            <div class="row">

                                <div class="col-md-12 mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        
                                        <div class="row">
                        
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label for="name" class="">Nom</label>
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="email" name="email" class="form-control">
                                                    <label for="email" class="">Email</label>
                                                </div>
                                            </div>
                                         
                        
                                        </div>
                                        
                                        <div class="row">
                        
                                            <div class="col-md-12">
                        
                                                <div class="md-form">
                                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                    <label for="message">Message</label>
                                                </div>
                        
                                            </div>
                                        </div>
                                        
                        
                                    </form>
                        
                                    <div class="text-center text-white my-5">
                                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').reset();">Annuler</a>
                                    </div>
                                    <div class="status"></div>
                                </div>
                                

                    
                
                @include('Guest.footer')
		</div>
	
@endsection
