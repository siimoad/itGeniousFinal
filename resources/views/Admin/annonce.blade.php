@extends('layouts.app')

@section('content')
    @include('Client.header')   

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12">
                    <a href="{{route('annonce.add')}}" class="mb-3 btn btn-secondary btn-lg  btn-block active" role="button" aria-pressed="true">Ajouter Annonce</a>


    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Formation</th>
                        <th scope="col">Theme</th>
                        <th scope="col">Formation PDF</th>
                        <th scope="col">Prix</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($annonces as $annonce)
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                            <span class="mb-0 text-sm"><a href="{{route('annonce.details',['id' => $annonce->id])}}">{{$annonce->formation->titre}}</a></span>
                            </div>
                        </th>
                        <td class="font-weight-normal">
                                <span class="mb-0 text-sm">{{$annonce->formation->theme}}</span>
                        </td>
                        <td class="font-weight-normal">
                                <span class="mb-0 text-sm">{{$annonce->formation->formation_pdf}}</span>
                        </td>

                        <td class="w-25    p-2">
                            <div>
                                  {{$annonce->prix}} DHs
                            </div>
        
                        </td>
                        <td class="text-right">

                                <a href="{{route('annonce.showAnnonce', ['id' => $annonce->id])}}" class="mb-3 btn btn-info active" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
                            <a href="dropdown-item" href="{{route('annonce.destroy', ['id' => $annonce->id])}}" class="mb-3 btn btn-danger active" role="button" aria-pressed="true"><i class="fa fa-trash" ></i></a>
        
                                </td>
                       
                    </tr>
                        
                    @empty
                        
                    @endforelse
                   
                            
                               
                    
                  
                    
                </tbody>
            </table>
            <div class="text-center text-white">
                    <INPUT class="btn btn-dark" TYPE="button" VALUE="Retour" onClick="history.back()">
                    
                </div>
        </div>
        
    </div>
            </div>

        
            </div>
</div>
        

    @endsection