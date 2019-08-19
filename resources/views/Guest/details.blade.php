@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        <h1 class="text-center">{{$annonce->formation->titre}}</h1> 
            <div class="my-6">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100" src="{{asset("storage/annonce_photo2/$annonce->annonce_photo2")}}" alt="">
                    </div>              
                    
                    <div class="col-md-7">
                        
                          
                                <h4 class="text-success"> Inscription en cours</h4>
                             <div class="short_overview my-4">
                             {!! nl2br($annonce->formation->description) !!}   
                             <br>
                             <p> <span class="text-danger ">Pour votre information : </span>
                                {!! nl2br($annonce->formation->infos) !!}
                                 </p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route ('reserver.index', ['id' => $annonce->id])}}" ><button type="button"   class="btn btn-primary" >Réservez votre place</button></a>
                                </div>

                                
                                <div class="col-md-4">
                                        <form class="cart clearfix" method="post">
                                                <a href="#"><button type="button" class="btn btn-primary " >Brochure</button></a>
                                            </form>
                                </div>
                            </div>


                        </div>
                    </div>
            
                </div>
                
                @include('Guest.footer')
        </div>

        
 


  
   

    

@endsection