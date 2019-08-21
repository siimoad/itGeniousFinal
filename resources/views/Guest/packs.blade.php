@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
@include('Guest.header')
<div class="container ">
           
               
                        
                      
                 <div class="short_overview my-4">
                 Conscient de l’importance des certifications IT dans le monde informatique, et dans le but d’offrir des offres attractives à nos chers clients 
                        IT genious lance le Pack 3 IN 1, c’est un pack qui permet de se former sur 3 technologies différentes en parallèle tout en gagnant du temps et de l’argent.
                        Nous vous proposons deux packs incluant les certificats les plus demandés dans le marché :
                        •	 La certification MCSA 2016 de Microsoft 
                        •	 La certification CCNA Routing and switching 
                        •	La certification VMWARE VCA 
                        Où
                        •	La certification MCSA 2016 de Microsoft 
                        •	 La certification CCNA Routing and switching 
                        •	Introduction au Fortinet 
                        
                        Pour plus de détails :  Nous vous invitons à télécharger la brochure détaillée de la formation
                        
                    
                 <br><br><br>
                 <p> <span class="text-danger">Pour votre information : </span>
                    -	A la fin de la formation et afin de se certifier, l’étudiant est amené à passer les examens des certifications au sein d’un centre Certifié Pearson Vue de son choix.
                    -	IT Genious étant un centre Person Vue certifié, offre la possibilité à ces étudiants de se certifier chez nous, sans avoir à se déplacer, à des prix très avantageux.
                    

                     </p>
                </div>
             


            </div>
            <br>
            <div class="text-center text-white">
                    <INPUT class="btn btn-lg btn-primary" TYPE="button" VALUE="Retour" onClick="history.back()">
                    
                </div>
                <br><br><br>
        </div>

    </div>
    
    @include('Guest.footer')
</div>     
    @endsection