@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
<div class="container ">
    <h1 class="text-center">Microsoft</h1> 
        <div class="my-6">
            <div class="row">
                <div class="col-md-5">
                    <img class="d-block w-100"  src="{{ asset('gretong') }}/images/2-MICROSOFT-MCSA2016.png" class="img-fluid" alt="img-responsive">
                </div>        
                <div class="col-md-7">
                        
                      
                 <div class="short_overview my-4">
                 <h5>-	Le titre à modifier => Formation MCSA MICROSOFT SERVEUR 2016
                    -	Texte à modifier =>
                     L'obtention d'une certification MCSA : Windows Server 2016 donne les qualifications nécessaires pour un poste d'administrateur système et réseau. 
                     Il s'agit de la première Certification et étape avant de continuer et devenir un Microsoft Certified Solutions Expert (MCSE).
                    La formation a pour objectif de vous initier à : 
                    •	Comprendre le principe d’un système d’exploitation Serveur 
                    •	Installation, mise a jour et migration des Serveurs sous systèmes Windows 
                    •	Configuration du stockage local et des solutions de stockage pour entreprise 
                    •	Virtualisation sous Hyper V 
                    •	Haute disponibilité et le clustering
                    •	Gestion des images de déploiement et des mises a jours 
                    •	Gestion, Surveillance et maintenance Windows  
                    •	Gestion et configuration du réseaux : IPV4 , IPV6 , VPN , DirectAccess …
                    •	Comprendre et utiliser ADDS, DNS, DHCP, GPO …
                    …
                                  Pour plus de détails :  Nous vous invitons à télécharger la brochure détaillée de la formation
                    </h5>
                 <br>
                 <p> <span class="text-danger">Pour votre information : </span>
                    -	A la fin de la formation et afin de se certifier, l’étudiant est amené à passer les 3 examens officiels de Microsoft (70-740 , 70-741, 70-742) au sein d’un centre Certifié Pearson Vue de son choix.
-	IT Genious étant un centre Person Vue certifié, offre la possibilité a ces étudiants de se certifier chez nous, sans avoir à se déplacer, à des prix très avantageux.

                     </p>
                </div>
             


            </div>
            <div class="text-center text-white">
                    <INPUT class="btn btn-lg btn-primary" TYPE="button" VALUE="Retour" onClick="history.back()">
                    
                </div>
        </div>

    </div>
    
    @include('Guest.footer')
</div>     
    @endsection