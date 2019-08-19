@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
<div class="container">
        <h1 class="text-center">{{$annonce->formation->titre}}</h1> 
            <div class="my-6">
                <div class="row">
                    <div class="col-md-3">
                        <img class="d-block w-100" src="{{asset("storage/annonce_photo2/$annonce->annonce_photo2")}}" alt="">
                    </div>              
                    <div class="col-md-9">
                             <div class="short_overview my-4">
                             <h5>{!! nl2br($annonce->formation->description) !!}</h5>
                             <br>
                             <p> <span class="text-danger">Pour votre information : </span>
                                {!! nl2br($annonce->formation->infos) !!}
                                 </p>
                            </div>


                        </div>
                    </div>
            
                </div>
                <div class="text-center text-white my-3">
                        <INPUT class="btn btn-lg btn-primary" TYPE="button" VALUE="Retour" onClick="history.back()">
                        
                    </div>
               
                @include('Guest.footer')
                
        </div>

        
 


  
   

    

@endsection
