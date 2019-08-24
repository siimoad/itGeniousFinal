@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        
            <div class="my-6">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100" src="{{ asset('gretong') }}/images/packs.png" alt="">
                    </div>              
                    
                    <div class="col-md-7">
                             <div class="short_overview my-4">
                               Conscient de l’importance des certifications IT dans le monde informatique, et dans le but d’offrir des offres attractives à nos chers clients 
                               IT genious lance le Pack 3 IN 1, c’est un pack qui permet de se former sur 3 technologies différentes en parallèle tout en gagnant du temps et de l’argent.
                               Nous vous proposons deux packs incluant les certificats les plus demandés dans le marché :<br>
                               •	 La certification MCSA 2016 de Microsoft <br>
                               •	 La certification CCNA Routing and switching <br>
                               •	La certification VMWARE VCA <br>
                               Où<br>
                               •	La certification MCSA 2016 de Microsoft <br>
                               •	 La certification CCNA Routing and switching<br> 
                               •	Introduction au Fortinet 
                               <br><br><br>
                               <p><span class="text-danger">Pour votre information : </span></p>
                               Pour plus de détails :  Nous vous invitons à télécharger la brochure détaillée de la formation
                               Pour votre information : 
                                A la fin de la formation et afin de se certifier, l’étudiant est amené à passer les examens des certifications au sein d’un centre Certifié Pearson Vue de son choix.
                                <br><b><font color="red">IT Genious étant un centre Person Vue certifié, offre la possibilité à ces étudiants de se certifier chez nous, sans avoir à se déplacer, à des prix très avantageux.</font></b>
                               
								
                             <br>
                             
                            </div>
                        

                            <a href="#"><button type="button"   class="btn btn-primary" >Réservez votre place</button></a>
                            <a href="#"><button type="button" class="btn btn-primary " >Brochure</button></a>

                        </div>
                    </div>
            
                </div><br>
                
                @include('Guest.footer')
		</div>
	
@endsection
